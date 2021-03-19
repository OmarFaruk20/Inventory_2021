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
            <!-- Start Row -->      	
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">Add Advanced Salary</h3></div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <form role="form" action="{{url('/store_advanced_salary')}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group">
                                <label for="Employee">Employee</label>
                                @php
                                    $emp = DB::table('employees')->get();
                                @endphp
                                <select name="emp_id" class="form-control">    
                                @foreach($emp as $row)
                                    
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="month">Month</label>
                                <select name="month" class="form-control">
                                    <option>Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="text" class="form-control" name="year" placeholder="Enter Year">
                            </div>


                             <div class="form-group">
                                <label for="advanced_salary">Advanced Salary</label>
                                <input type="text" name="advanced_salary" class="form-control"placeholder="Advanced Salary">
                            </div>

                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
		</div>
			<!-- End Row -->
	</div>
</div>
</div>
@endsection