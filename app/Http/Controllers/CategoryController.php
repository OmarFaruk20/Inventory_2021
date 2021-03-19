<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
	/**
	* @return void
	**/
	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		return view('category.add_category');
	}

	public function store(request $request){
		$store = new Category();
		$store->category_name = $request->category_name;
		$store->save();
		return redirect()->back();
	}

	public function show(){
		$data['show_cat'] = Category::all();
		return view('category.all_category', $data);
	}

	public function edit($id){
		$data['edit_cat'] = Category::findOrFail($id);
		return view('category.edit_category', $data);
	}

	public function update(request $request, $id){
		$update_cat = Category::Find($id);
		$update_cat->category_name = $request->category_name;
		$update_cat->save();
		return redirect('all.category');
	}

	public function delete($id){
		$delete = Category::Find($id);
		$delete->delete();
		return redirect('all.category');
	}

}
