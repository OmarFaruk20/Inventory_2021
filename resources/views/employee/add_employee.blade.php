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
                    <div class="panel-heading"><h3 class="panel-title">Add Employee</h3></div>
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
                        <form role="form" action="{{url('/store_employee')}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group">
                                <label for="name">Employee Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" cols="30" rows="4" placeholder="Enter Address"></textarea>
                            </div>

                             <div class="form-group">
                                <label for="nid_no">NID No</label>
                                <input type="text" name="nid_no" class="form-control"placeholder="Enter Nid No">
                            </div>

                            <div class="form-group">
                                <label for="Experience">Experience</label>
                                <input type="text" class="form-control" name="experience" placeholder="Enter Experience">
                            </div>

                            <div class="form-group">
                                <label for="Salary">Salary</label>
                                <input type="text" class="form-control" name="salary" placeholder="Enter Salary">
                            </div>

                            <div class="form-group">
                                <label for="vacation">Vacation</label>
                                <input type="text" class="form-control" name="vacation" placeholder="Enter Vacation">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" placeholder="Enter City">
                            </div>

                            <div class="form-group">
			                 <label for="img_preview" style="color:black">image</label>
			                  <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
		               		</div>

		               		 <div class="mb-3">
							    <label for="img_preview" style="color:black"></label><br>
		                    	<img src="#" id="blah" alt="" width="150" height="150" />
		               		 </div>
                            <br>
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