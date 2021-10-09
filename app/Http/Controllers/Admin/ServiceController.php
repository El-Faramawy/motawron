<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    public function index(){
        return view('Admin/Service/index');
    }
//    //===========================================================================

    public function all_services(){
        $service = Service::all();
        return DataTables::of($service)
            ->addColumn('icon',function ($service) {
                $icon = '<center><i class="'.$service->icon.'"></i></center>';
                return $icon;
            })
            ->addColumn('edit',function ($service) {
                $edit = '<center><a class="btn btn-sm btn-icon btn-info" style="border-radius: 50% !important;" onclick="update(' . $service->id . ')"><i class="fa fa-edit"></i></a></center>';
                return $edit;
            })
            ->addColumn('delete',function ($service){
                $delete =  '<center><a class="btn btn-sm btn-icon btn-danger delete_element" data_delete="'.route("delete_service").'" data_id='.$service->id.' style="border-radius: 50% !important;" onclick="delete_('.$service->id.')"><i class="fa fa-trash"></i></a></center>';
                return $delete;
            })->rawColumns(['edit','delete','icon'])->make(true);
    }
//    //===========================================================================

    public function delete_service(Request $request){
        Service::where('id',$request->id)->delete();
        return response()->json();
    }
}
