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
                    <div class="panel-heading"><h3 class="panel-title">Employee Details</h3></div>
                    <div class="panel-body">
                        
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$single_emp->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$single_emp->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$single_emp->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" cols="30" rows="4">{{$single_emp->address}}</textarea>
                            </div>

                             <div class="form-group">
                                <label for="nid_no">NID No</label>
                                <input type="text" name="nid_no" class="form-control"value="{{$single_emp->nid_no}}">
                            </div>

                            <div class="form-group">
                                <label for="Experience">Experience</label>
                                <input type="text" class="form-control" name="experience" value="{{$single_emp->experience}}">
                            </div>

                            <div class="form-group">
                                <label for="Salary">Salary</label>
                                <input type="text" class="form-control" name="salary" value="{{$single_emp->salary}}">
                            </div>

                            <div class="form-group">
                                <label for="vacation">Vacation</label>
                                <input type="text" class="form-control" name="vacation"  value="{{$single_emp->vacation}}">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$single_emp->city}}">
                            </div>


		               		 <div class="form-group">
							    <label for="img_preview" style="color:black">Image</label><br>
		                    	<img src="{{url('img/').'/'.$single_emp->image}}" id="blah" alt="" width="150" height="150" />
		               		 </div>
                            <br>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
		</div>
			<!-- End Row -->
	</div>
</div>
</div>
@endsection