<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expense;

class ExpenseController extends Controller
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

   }

   public function store(request $request){

    }

    public function show(){

    }

    public function edit($id){

    }

    public function update(request $request, $id){

    }

    public function delete($id){

    }


}
