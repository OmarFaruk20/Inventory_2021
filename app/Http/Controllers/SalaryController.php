<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdvancedSalary;
use App\employee;
use DB;
class SalaryController extends Controller
{

	/**
	* @return void
	**/
	public function __construct(){
		$this->middleware('auth');
	}


    public function index(){
    	return view('salary.add_advanced_salary');
    }

    public function store(request $request){
    	$month = $request->month;
    	$emp_id = $request->emp_id;
    	$advanced = AdvancedSalary::where('month', $month)->where('emp_id', $emp_id)->first();
    	
    	if($advanced === NULL){
    		$store = new AdvancedSalary();
	    	$store->emp_id = $request->emp_id;
	    	$store->month = $request->month;
	    	$store->year = $request->year;
	    	$store->advanced_salary = $request->advanced_salary;
	    	$store->save();
	    	if($store){
	    		 $notification = array(
	            'message' => 'Employee Inserted Successfully', 
	            'alert-type' => 'success'
	          );
	    		return redirect()->back()->with($notification);
	    	}else{
	    		$notification = array(
	    			'message' => 'error', 
	            	'alert-type' => 'success'
	    		);
	    		return redirect()->back()->with($notification);
	    	}
    	}else{
    		$msg = 'Already Advanced Paid for this Month';
    		return redirect()->back()->with($msg);
    	}
    	
    	
    	
    }

    public function show(){
    	
    	$data['view_sal'] = DB::table('advanced_salaries')
    	->join('employees','advanced_salaries.emp_id','employees.id')
    	->select('advanced_salaries.*','employees.name','employees.salary','employees.image')
    	->orderBy('id', 'DESC')
    	->get();
  
    	return view('salary.all_advanced_salary', $data);
    }

    public function edit($id){

        $data['edit_ad_sal'] = AdvancedSalary::findOrFail($id);
        return view('salary.edit_advanced_salary', $data);
    }

    public function update(request $request, $id){

        $update = AdvancedSalary::Find($id);

        $update->emp_id = $request->emp_id;
        $update->month = $request->month;
        $update->year = $request->year;
        $update->advanced_salary = $request->advanced_salary;
        $update->save();
        return redirect('/all.advanced.salary');
   
    }

    public function delete($id){
        $delete = AdvancedSalary::where('id',$id)->delete();

        return redirect()->back();
    }

// This is function for pay Salary
     public function PaySalary(){
        

        $data['salary_view'] = employee::all();

        return view('salary.all_salary', $data);
    }
}
