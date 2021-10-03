<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCar;
use App\Models\Car;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShoppingCarsController extends Controller
{
    use PhotoTrait;
    public function index(){
        $cars = Car::all();
        return view('Admin.shopping_cars.index',compact('cars'));
    }

    public function delete(request $request){
        Car::findOrfail($request->id)->delete();
        return back()->with(notification('تم حذف البائع بنجاح', 'success'));
    }

    public function add(){
        return view('Admin.shopping_cars.add');
    }

    public function create(StoreCar $request){
        try {
            if($request->password != $request->confirm)
                return back()->with(notification('كلمة المرور لا تتطابق', 'error'));
            else {
                $file_name = $this->saveImage($request->image, 'uploads/cars');
                Car::create([
                    'photo'     => 'uploads/cars/' . $file_name,
                    'name'      => $request->name,
                    'latitude'  => $request->latitude,
                    'longitude' => $request->longitude,
                    'user_name' => $request->user_name,
                    'password'  => Hash::make($request->password),
                    'is_work'   => ($request->is_work === 'on') ? '1' : '0',
                ]);
                return redirect()->route('shopping_cars')->with(notification('تم اضافة عربة جديدة', 'info'));
            }
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }
    }

    public function edit($id){
        $car    = Car::findOrFail($id);
        $status = ($car->is_work === '1') ? 'checked' : '';
        return view('Admin.shopping_cars.edit',compact('car','status'));
    }

    public function update(StoreCar $request){
        $car = Car::findOrFail($request->id);

        if($request->image){
            $file_name = $this->saveImage($request->image, 'uploads/cars');
            $car->photo = 'uploads/cars/' .$file_name;
            $car->save();
        }

        ## if change password then update all
        if($request->password != ''){
            if($request->password != $request->confirm)
                return back()->with(notification('كلمة المرور لا تتطابق', 'error'));
            else {
                $inputs = $request->except('_token','num','confirm','image');
                $inputs['is_work'] = ($request->is_work === 'on') ? '1' : '0';
                $inputs['password'] = Hash::make($request->password);
                $car->update($inputs);
            }
        }

        ## else don't update password
        else{
            $inputs = $request->except('_token','num','confirm','password','image');
            $inputs['is_work'] = ($request->is_work === 'on') ? '1' : '0';
            $car->update($inputs);
        }
        return redirect()->route('shopping_cars')->with(notification('تم تحديث العربة بنجاح', 'info'));
    }
}
