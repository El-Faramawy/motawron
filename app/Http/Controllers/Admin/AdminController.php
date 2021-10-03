<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function get(){
        $get=Admin::all();
        return view('Admin/Admin/index',compact('get'));
    }//end fun

    public function store_admin(Request $request){
        try {
            $valedator = Validator::make($request->all(), [
                'email' => ['unique:admins'],
            ]);
            if ($valedator->fails()) {
                return back()->with(notification('هذا البريد الالكترونى موجود مسبقا', 'error'));
            }
            $new = new Admin();
            $new->email = $request->email;
            $new->password = Hash::make($request->password);
//            $new->phone = $request->phone;
            $new->name = $request->name;
            $new->save();
            return redirect('admin/show-admins')->with(notification('تم الحفظ', 'success'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }//end fun

    public function admin_delete(Request $request){
        $admin=Admin::findOrfail($request->id);
        if($admin->id != admin()->user()->id) {
            $admin->delete();
            return redirect('admin/show-admins')->with(notification('تم الحذف', 'warning'));
        }
        else
            return redirect('admin/show-admins')->with(notification('لا يمكن حذف المشرف المسجل به', 'error'));
    }//end fun

    public function admin_edit($id){
        $get=Admin::where('id',$id)->get();
        return view('Admin/Admin/edit',['data'=>$get]);
    }//end fun


    public function store_admin_update(Request $request){
        $update=Admin::find($request->id);
        $email=Admin::where('id',$request->id)->get();
        foreach ($email as $back){

            if ($back->email != $request->email){
                $valedator =Validator::make($request->all(),[
                    'email'=> [ 'unique:admins'],
                ]);
                if ($valedator->fails()) {
                    return redirect('admin/show-admins')->with(notification('هذا البريد الالكترونى موجود مسبقا','error'));
                }
            }
            if (isset($request->password)){
                $update->password=Hash::make($request->password);
            }
        }
        $update->name=$request->name;
        $update->email=$request->email;
        $update->save();
        return redirect('admin/show-admins')->with(notification('تم التعديل','info'));
    }//end fun

    public function save_profile(Request $request){
        if (auth()->guard('admin')->user()->email != $request->email){
            $valedator =Validator::make($request->all(),[
                'email'=> [ 'unique:admins'],
            ]);
            if ($valedator->fails()) {
                return back()->with(notification('هذا البريد الإلكترونى موجود مسبقا','warning'));
            }
        }
        $update=Admin::find(auth()->guard('admin')->user()->id);
        $update->name=$request->name;
        $update->email=$request->email;
        if (isset($request->password)){
            $update->password=Hash::make($request->password);
        }
        $update->save();
        return back()->with(notification('تم التعديل','info'));
    }//end fun

    public function my_profile(){
        return view('Admin/profile/index');
    }//end fun
}
