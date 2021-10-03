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
//    public function all_services(){
//        $contact = Service::all();
//        return response()->json($contact);
//        return DataTables::of($contact)
//            ->addColumn('action',function ($contac){
////                $btn = '<a class="btn btn-sm btn-success" onclick="show('.$contact->id.')">Show</a>'.''.
////                    '<a class="btn btn-sm btn-info" onclick="update('.$contact->id.')">Edit</a>'.''.
////                    '<a class="btn btn-sm btn-danger" onclick="delete('.$contact->id.')">Delete</a>';
//                $btn = '<td>
//                                <button type="button" class="btn btn-icon btn-info btn-sm" onclick="update('.$contac->id.')" data-toggle="modal"    style="border-radius: 50% !important;" data-target="#edit" ><i class="fa fa-edit"></i></button>
//                            </td>
//                            <td>
//                                <button type="button" class="btn btn-icon btn-danger btn-sm" onclick="delete('.$contac->id.')" data-toggle="modal"    style="border-radius: 50% !important;" data-target="#delete" ><i class="fa fa-trash"></i></button>
//                            </td>';
//                return $btn;
//            })->make(true);
//    }

    public function all_contact(){
        $contact = Contact::all();
        return DataTables::of($contact)
            ->addColumn('action',function ($contact){
                $btn = '<a class="btn btn-sm btn-success" onclick="show('.$contact->id.')">Show</a>'.
                    '<a class="btn btn-sm btn-info" onclick="update('.$contact->id.')">Edit</a>'.
                    '<a class="btn btn-sm btn-danger" onclick="delete('.$contact->id.')">Delete</a>';
                return $btn;
            })->rowColumn(['action'])->make(true);
    }
}
