<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Models\Products;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use PhotoTrait;
    public function index(){
        $products = Products::all();
        return view('Admin.products.index',compact('products'));
    }

    public function update(StoreProduct $request){
        try {
            $product = Products::findOrFail($request->id);

            // check if the image is changed
            if ($request->has('image')){
                $file_name = $this->saveImage($request->image, 'uploads/products');
                $product->update([
                    'photo' => 'uploads/products/'.$file_name,
                ]);
            }
            $inputs = $request->except('_token','image','num');
            $product->update($inputs);
            return back()->with(notification('تم تعديل المنتج بنجاح', 'success'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function delete(request $request){
        Products::findOrfail($request->id)->delete();
        return back()->with(notification('تم حذف المنتج بنجاح', 'success'));
    }

    public function create(StoreProduct $request){
        try {
            $file_name = $this->saveImage($request->image, 'uploads/products');
            Products::create([
                'photo'     => 'uploads/products/' . $file_name,
                'name'      => $request->name,
                'price'     => $request->price,
            ]);
            return redirect()->route('products')->with(notification('تم اضافة منتج جديد', 'info'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }
}
