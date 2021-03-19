@extends('layouts.app')
@section('content')
<div class="content-page">
	<div class="content">
	    <div class="container">
			 <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{route('home')}}">Webpanda99</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div>
            </div> 
            <!-- Page-Title -->
            <!-- Start Row -->         
            <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Salary Table <span class="pull-right text-danger">{{ date("F Y") }}</span> </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Employe Name</th>
                                            <th>Photo</th>
                                            <th>Month's</th>
                                            <th>salary</th>
                                            <th>Advanced</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                <!---Return Advanced Salary of Employee---->
                                @php 
                                    $sl=1;
                                // $month = date("F", strtotime('-1 month'));
                                // $data['view_sal'] = DB::table('advanced_salaries')
                                // ->join('employees','advanced_salaries.emp_id','employees.id')
                                // ->select('advanced_salaries.*','employees.name','employees.salary','employees.image')
                                // ->where('month',$month)
                                // ->get();
                                @endphp
                                <!---End PHP Code---->
                                    <tbody>
                                        @foreach($salary_view as $show)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$show->name}}</td>
                                            <td> <img src="{{url('img/').'/'.$show->image}}" style="height: 80px; width: 80px" alt=""> </td>
                                            <td>
                                                <span class="badge badge-success">
                                                {{ date ("F", strtotime('-1 months'))}}
                                                </span>
                                            </td>
                                            <td>{{$show->salary}}</td>

                                            <td>
                                                 
                                            </td>

                                            <td style="text-align:center;">
                                                <a href="#" class="btn btn-sm btn-primary">Pay Now</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- End Row --> 
        </div>
    </div>
</div>
@endsection