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
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Update Employee Information</h3></div>
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
                        <form role="form" action="{{url('/update_employee')}}/{{$edit_emp->id}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$edit_emp->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"value="{{$edit_emp->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$edit_emp->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" cols="30" rows="4">{{$edit_emp->name}}</textarea>
                            </div>

                             <div class="form-group">
                                <label for="nid_no">NID No</label>
                                <input type="text" name="nid_no" class="form-control"value="{{$edit_emp->nid_no}}">
                            </div>

                            <div class="form-group">
                                <label for="Experience">Experience</label>
                                <input type="text" class="form-control" name="experience" value="{{$edit_emp->experience}}">
                            </div>

                            <div class="form-group">
                                <label for="Salary">Salary</label>
                                <input type="text" class="form-control" name="salary" value="{{$edit_emp->salary}}">
                            </div>

                            <div class="form-group">
                                <label for="vacation">Vacation</label>
                                <input type="text" class="form-control" name="vacation" value="{{$edit_emp->vacation}}">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$edit_emp->city}}">
                            </div>

                            <div class="form-group">
			                 <label for="img_preview" style="color:black">image</label>
			                  <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
		               		</div>

		               		 <div class="mb-3">
							    <label for="img_preview" style="color:black"></label><br>
		                    	<img src="{{url('img/').'/'.$edit_emp->image}}" id="blah" alt="" width="150" height="150" />
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