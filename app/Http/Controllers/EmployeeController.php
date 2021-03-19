<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){
    	return view('employee.add_employee');
    }

    public function store(request $request){

    	$validateData = $request->validate([
    		'name' => 'required|max:255',
    		'email' => 'required|unique:employees|max:255',
            'nid_no' => 'required|unique:employees|max:255',
            'address' => 'required',
            'phone' => 'required|max:13',
            'image' => 'required',
            'salary' => 'required', 
    	]);

        $store_emp = new employee();

        $store_emp->name = $request->name;
        $store_emp->email = $request->email;
        $store_emp->phone = $request->phone;
        $store_emp->address = $request->address;
        $store_emp->nid_no = $request->nid_no;
        $store_emp->experience = $request->experience;
        $store_emp->salary = $request->salary;
        $store_emp->vacation = $request->vacation;
        $store_emp->city = $request->city;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/', $filename);
            $store_emp->image = $filename;
        }else{
            return $request;
            $store_emp->image = '';
        }
       
        $store_emp->save();

        $notification = array(
            'message' => 'Employee Inserted Successfully', 
            'alert-type' => 'success'
          );
        return redirect()->back()->with($notification);
    }
    
    public function show(){
        $data = employee::all();
        return view('employee.all_employee', compact('data'));
    }

    public function single_view($id){
        $single_emp = employee::findOrFail($id);
        return view('employee.single_employee', compact('single_emp'));
    }

    public function edit($id){
        $edit_emp = employee::findOrFail($id);
        return view('employee.edit_employee',compact('edit_emp'));

    }

    public function update(request $request, $id){
        $update_emp = employee::Find($id);

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'nid_no' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required|max:13',
            'image' => 'required',
            'salary' => 'required', 
        ]);

        $update_emp->name = $request->name;
        $update_emp->email = $request->email;
        $update_emp->phone = $request->phone;
        $update_emp->address = $request->address;
        $update_emp->nid_no = $request->nid_no;
        $update_emp->experience = $request->experience;
        $update_emp->salary = $request->salary;
        $update_emp->vacation = $request->vacation;
        $update_emp->city = $request->city;

         if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            unlink('img/'.$update_emp->image);
            $file->move('img/', $filename);
            $update_emp->image = $filename;
        }else{
            return $request;
            $update_emp->image = '';
        }
       
        $update_emp->save();
        return redirect('/all.employee');
    }


    public function delete($id){
        $delete = employee::where('id',$id)->first();
        $photo = $delete->image;
        unlink('img/'.$photo);
        $confirm_del = employee::where('id',$id)->delete();
        return redirect()->back();
    }
}
