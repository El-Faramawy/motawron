<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCar;
use App\Models\Client;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use PhotoTrait;
    public function index(){
        $clients = Client::all();
        return view('Admin.users.index',compact('clients'));
    }

    public function delete(request $request){
        Client::findOrfail($request->id)->delete();
        return back()->with(notification('تم حذف العميل بنجاح', 'success'));
    }
}
