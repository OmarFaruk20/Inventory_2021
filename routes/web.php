<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'], function(){

});

/*===============Employee Route==================*/
Route::get('/add.employee', 'EmployeeController@index')->name('add.employee');
Route::post('/store_employee', 'EmployeeController@store');
Route::get('/all.employee', 'EmployeeController@show')->name('all.employee');
Route::get('/view_employee/{id}', 'EmployeeController@single_view');
Route::get('/edit_employee/{id}', 'EmployeeController@edit');
Route::post('/update_employee/{id}', 'EmployeeController@update');
Route::get('/delete_employee/{id}', 'EmployeeController@delete');

/*===============Customer Route==================*/
Route::get('/add.customer','CustomerController@index')->name('add.customer');
Route::post('store_customer', 'CustomerController@store')->name('store_customer');
Route::get('/all.customer','CustomerController@show')->name('all.customer');
Route::get('/view_customer/{id}', 'CustomerController@single_view');
Route::get('/edit_customer/{id}', 'CustomerController@edit');
Route::post('/update_customer/{id}', 'CustomerController@update');
Route::get('/delete_customer/{id}', 'CustomerController@delete');

/*===============Supplier Route==================*/
Route::get('/add_supplier', 'SupplierController@index')->name('add_supplier');
Route::post('/store_supplier','SupplierController@store');
Route::get('/all_supplier','SupplierController@show')->name('all_supplier');
Route::get('/view_supplier/{id}', 'SupplierController@single_view');
Route::get('/edit_supplier/{id}', 'SupplierController@edit');
Route::post('/update_supplier/{id}', 'SupplierController@update');
Route::get('/delete_supplier/{id}', 'SupplierController@delete');

/*===============Advanced Salary Route==================*/
Route::get('/add.advanced.salary','SalaryController@index')->name('add.advanced.salary');
Route::post('/store_advanced_salary','SalaryController@store');
Route::get('/all.advanced.salary','SalaryController@show')->name('all.advanced.salary');
Route::get('/edit_advanced_salary/{id}', 'SalaryController@edit');
Route::post('/store_advanced_salary/{id}', 'SalaryController@update');
Route::get('/delete_advanced_salary/{id}', 'SalaryController@delete');

/*===============Salary Route==================*/
Route::get('/pay.salary', 'SalaryController@PaySalary')->name('pay.salary');

Route::get('/last_month_salary', 'SalaryController@LastMonthSalary')->name('last_month_salary');

/*===============Category Route==================*/
Route::get('/add.category','CategoryController@index')->name('add.category');
Route::post('/store_category', 'CategoryController@store');
Route::get('/all.category','CategoryController@show')->name('all.category');
Route::get('/edit_category/{id}','CategoryController@edit');
Route::post('/update_category/{id}','CategoryController@update');
Route::get('/delete_category/{id}','CategoryController@delete');

/*===============Product Route==================*/
Route::get('/add.product','ProductController@index')->name('add.product');
Route::post('/store_product', 'ProductController@store');
Route::get('/all.product','ProductController@show')->name('all.product');
Route::get('/view_product/{id}','ProductController@single_view');
Route::get('/edit_product/{id}', 'ProductController@edit');
Route::post('/update_product/{id}','ProductController@update');
Route::get('/delete_product/{id}', 'ProductController@delete');

/*===============Expense Route==================*/
Route::get('/add.expense', 'ExpenseController@index')->name('add.expense');
// Route::get('/add.expense', 'ExpenseController@index')->name('add.expense');
Route::get('/all.expense', 'ExpenseController@show')->name('all.expense');
