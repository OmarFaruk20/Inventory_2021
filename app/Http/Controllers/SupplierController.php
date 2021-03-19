<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use DB;
class SupplierController extends Controller
{
    /**
	*
	*
	* @return void
	**/
	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		return view('supplier.add_supplier');
	}

	public function store(request $request){

		$store_sup = new Supplier();

		$validateData = $request->validate([
			'name' => 'required|max:255',
			'email' => 'required|unique:suppliers|max:255',
			'phone' => 'required|unique:suppliers|max:13',
			'address' => 'required|max:255',
			'city' => 'required',
		]);

		$store_sup->name = $request->name;
		$store_sup->email = $request->email;
		$store_sup->phone = $request->phone;
		$store_sup->address = $request->address;
		$store_sup->type = $request->type;
		$store_sup->shop = $request->shop;
		$store_sup->account_holder = $request->account_holder;
		$store_sup->account_number = $request->account_number;
		$store_sup->bank_name = $request->bank_name;
		$store_sup->branch_name = $request->branch_name;
		$store_sup->city = $request->city;

		if($request->hasFile('image')){
			$file = $request->file('image');
			$ext = $file->getClientOriginalExtension();
			$filename = time().'.'.$ext;
			$file->move('supplier/', $filename);
    		$store_sup->image = $filename;
		}else{
    		return $request;
    		$store_sup->image = '';
    	}
    	$store_sup->save();
        return redirect()->back();
	}

	public function show(){
		$data['show_sup'] = Supplier::all();
		return view('supplier.all_supplier', $data);
	}

	public function single_view($id){
		$data['single_view'] = Supplier::findOrFail($id);
		return view('supplier.single_supplier', $data);
	}

	public function edit($id){
		$data['edit_sup'] = Supplier::findOrFail($id);
			
		return view('supplier.edit_supplier', $data);
	}

	public function update(request $request, $id){
		$update = Supplier::Find($id);

		$validateData = $request->validate([
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			'phone' => 'required|max:13',
			'address' => 'required|max:255',
			'city' => 'required',
		]);

		if($request->image == true){
			$update->name = $request->name;
			$update->email = $request->email;
			$update->phone = $request->phone;
			$update->address = $request->address;
			$update->type = $request->type;
			$update->shop = $request->shop;
			$update->account_holder = $request->account_holder;
			$update->account_number = $request->account_number;
			$update->bank_name = $request->bank_name;
			$update->branch_name = $request->branch_name;
			$update->city = $request->city;

		if($request->hasFile('image')){
			$file = $request->file('image');
			$ext = $file->getClientOriginalExtension();
			$filename = time().'.'.$ext;
			unlink('supplier/'.$update->image);
			$file->move('supplier/', $filename);
    		$update->image = $filename;
		}else{
    		return $request;
    		$update->image = '';
    	}
    	
		}else{
			$update->name = $request->name;
			$update->email = $request->email;
			$update->phone = $request->phone;
			$update->address = $request->address;
			$update->type = $request->type;
			$update->shop = $request->shop;
			$update->account_holder = $request->account_holder;
			$update->account_number = $request->account_number;
			$update->bank_name = $request->bank_name;
			$update->branch_name = $request->branch_name;
			$update->city = $request->city;
		}
		    $update->save();
		
    	return redirect('/all_supplier');
	}

	public function delete($id){
		$delete = Supplier::where('id', $id)->first();
		$photo = $delete->image;
		unlink('supplier/'.$photo);
		$confirm_delete = Supplier::where('id', $id)->delete();
		return redirect('/all_supplier');
	}
}
