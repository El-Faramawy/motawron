<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'admin'], function () {
    Route::get('login',function (){
        if (Auth::guard('admin')->check()){
            return redirect('admin/home');
        }
        return view('Admin/auth/login');
    });
    Route::post('do-log','AuthController@login')->name('do-log');


    //******* after login *******
    Route::group(['middleware' => 'admin:admin'], function () {

        Route::get('log-out','AuthController@logout')->name('log-out');

        Route::get('/',function (){
            return redirect('admin/home');
        })->name('/');
        Route::get('home','HomeController@index')->name('home');

        ################################### Admins ##########################################
        Route::get('show-admins','AdminController@get')->name('show-admins');
        Route::get('add-admin',function (){return view('Admin/Admin/create');})->name('add-admin');
        Route::post('store.admin','AdminController@store_admin')->name('store.admin');
        Route::post('admin_delete','AdminController@admin_delete')->name('admin_delete');
        Route::post('admin_edit/{id}','AdminController@admin_edit')->name('admin_edit');
        Route::post('admin_check.delete','AdminController@admin_check_delete')->name('admin_check.delete');
        Route::post('store.admin_update','AdminController@store_admin_update')->name('store.admin_update');

        ################################### Profile ##########################################
        Route::get('my_profile','AdminController@my_profile')->name('my_profile');
        Route::post('store-profile','AdminController@save_profile')->name('store-profile');


        ################################### Shopping cars ##########################################
        Route::get('services','ServiceController@index')->name('services');
//        Route::get('all/services','ServiceController@all_services')->name('all.services');
        Route::get('all/contact','ServiceController@all_contact')->name('all.contact');

        ################################### About ##########################################
        Route::get('main_about','ServiceController@main_about')->name('main_about');
        Route::get('about_us','ServiceController@about_us')->name('about_us');





    });//end Middleware Admin


});//end Prefix
