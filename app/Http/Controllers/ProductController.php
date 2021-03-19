<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){
    	return view('product.add_product');
    }

    public function store(request $request){
    	$store_product = new Product();

    	$store_product->product_name = $request->product_name;
    	$store_product->cat_id = $request->cat_id;
    	$store_product->sup_id = $request->sup_id;
    	$store_product->product_code = $request->product_code;
    	$store_product->product_store = $request->product_store;
    	$store_product->product_route = $request->product_route;
    	$store_product->buy_date = $request->buy_date;
    	$store_product->expire_date = $request->expire_date;
    	$store_product->buying_price = $request->buying_price;
    	$store_product->selling_price = $request->selling_price;

    	if($request->hasFile('product_image')){
    		$file = $request->file('product_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('product/', $filename);
            $store_product->product_image = $filename;
    	}else{
    		return $request;
            $store_product->product_image = '';
    	}
    	 $store_product->save();
    	 return redirect('/all.product');
    }

    public function show(){
    	$data['show_prodcut'] = Product::all();
    	return view('product.all_product', $data);
    }

    public function single_view($id){
    		$single_product = DB::table('products')
    		->join('categories', 'products.cat_id', 'categories.id')
    		->join('suppliers', 'products.sup_id', 'suppliers.id')
    		->select('categories.category_name', 'products.*', 'suppliers.name')
    		->where('products.id', $id)
    		->first();

    	return view('product.single_product', compact('single_product'));
    }

    public function edit($id){
    	$data['edit_product'] = Product::findOrFail($id);
    	return view('product.edit_product', $data);
    }

     public function update(request $request, $id){
        $update_product = Product::Find($id);
        if($request->product_image == true){

        $update_product->product_name = $request->product_name;
    	$update_product->cat_id = $request->cat_id;
    	$update_product->sup_id = $request->sup_id;
    	$update_product->product_code = $request->product_code;
    	$update_product->product_store = $request->product_store;
    	$update_product->product_route = $request->product_route;
    	$update_product->buy_date = $request->buy_date;
    	$update_product->expire_date = $request->expire_date;
    	$update_product->buying_price = $request->buying_price;
    	$update_product->selling_price = $request->selling_price;

    	if($request->hasFile('product_image')){
    		$file = $request->file('product_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            unlink('product/'.$update_product->product_image);
            $file->move('product/', $filename);
            $update_product->product_image = $filename;
    	}else{
    		return $request;
            $update_product->product_image = '';
    	}

        }else{
            $update_product->product_name = $request->product_name;
            $update_product->cat_id = $request->cat_id;
            $update_product->sup_id = $request->sup_id;
            $update_product->product_code = $request->product_code;
            $update_product->product_store = $request->product_store;
            $update_product->product_route = $request->product_route;
            $update_product->buy_date = $request->buy_date;
            $update_product->expire_date = $request->expire_date;
            $update_product->buying_price = $request->buying_price;
            $update_product->selling_price = $request->selling_price;
        }
            $update_product->save();
            return redirect('/all.product');
    }

     public function delete($id){
            $delete = Product::Find($id);
            $photo = $delete->product_image;
            unlink('product/'.$photo);
            $confirm_del = Product::where('id',$id)->delete();
            return redirect('/all.product');
    }

}
