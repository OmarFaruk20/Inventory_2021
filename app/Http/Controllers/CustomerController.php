<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
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
    	return view('customer.add_customer');
    }

    public function store(request $request){

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:customers|max:255',
            'phone' => 'required|max:13',
            'address' => 'required',
            'account_holder' => 'required|max:255',
            'account_number' => 'required',
            'bank_name' => 'required', 
            'bank_branch' => 'required', 
        ]);

    	$store_cus = new Customer();
    	$store_cus->name = $request->name;
    	$store_cus->email = $request->email;
    	$store_cus->phone = $request->phone;
    	$store_cus->address = $request->address;
    	$store_cus->shopname = $request->shopname;
    	$store_cus->account_holder = $request->account_holder;
    	$store_cus->account_number = $request->account_number;
    	$store_cus->bank_name = $request->bank_name;
    	$store_cus->bank_branch = $request->bank_branch;
    	$store_cus->city = $request->city;

    	if($request->hasFile('image')){
    		$file = $request->file('image');
    		$ext = $file->getClientOriginalExtension();
    		$filename = time().'.'.$ext;
    		$file->move('customer/', $filename);
    		$store_cus->image = $filename;
    	}else{
    		return $request;
    		$store_cus->image = '';
    	}
    	$store_cus->save();
        return redirect()->back();
    }

    public function show(){
    	$data['show_cus'] = Customer::all();
        return view('customer.all_customer', $data);

    }

    public function single_view($id){
    	$data['single_view'] = Customer::where('id', $id)->first();
        return view('customer.single_customer', $data);
    }

    public function edit($id){
    	$data['edit_cus'] = Customer::findOrFail($id);
        return view('customer.edit_customer', $data);
    }

    public function update(request $request, $id){

    	$update_cus = Customer::Find($id);

         $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:13',
            'address' => 'required',
            'account_holder' => 'required|max:255',
            'account_number' => 'required',
            'bank_name' => 'required', 
            'bank_branch' => 'required', 
        ]);

        $update_cus->name = $request->name;
        $update_cus->email = $request->email;
        $update_cus->phone = $request->phone;
        $update_cus->address = $request->address;
        $update_cus->shopname = $request->shopname;
        $update_cus->account_holder = $request->account_holder;
        $update_cus->account_number = $request->account_number;
        $update_cus->bank_name = $request->bank_name;
        $update_cus->bank_branch = $request->bank_branch;
        $update_cus->city = $request->city;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            unlink('customer/'.$update_cus->image);
            $file->move('customer/', $filename);
            $update_cus->image = $filename;
        }else{
            return $request;
            $update_cus->image = '';
        }
        $update_cus->save();

        return redirect('/all.customer');

    }

    public function delete($id){
    	$delete = Customer::where('id', $id)->first();
        $photo = $delete->image;
        unlink('customer/'.$photo);
        $confirm_del = Customer::where('id', $id)->delete();
        return redirect()->back();
    }
}
