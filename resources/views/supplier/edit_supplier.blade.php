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
                    <div class="panel-heading"><h3 class="panel-title">Update Supplier Information</h3></div>
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
                        <form role="form" action="{{url('/update_supplier')}}/{{$edit_sup->id}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
                                <input type="text" class="form-control" name="name" value="{{$edit_sup->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$edit_sup->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$edit_sup->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" cols="30" rows="4" placeholder="Enter Address">{{$edit_sup->address}}</textarea>
                            </div>

                             <div class="form-group">
                             	<!-- @php
                             		$data = DB::table('suppliers')->get();
                             	@endphp -->
                                <label for="type">Supplier Type</label>
                                <select name="type" class="form-control">
                                <option disabled="" selected="">Select Type</option>
                                <option value="{{$edit_sup->type}}">{{$edit_sup->type}}</option>  
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shop">Shop</label>
                                <input type="text" class="form-control" name="shop" value="{{$edit_sup->shop}}">
                            </div>

                            <div class="form-group">
                                <label for="account_holder">Account Holder</label>
                                <input type="text" class="form-control" name="account_holder" value="{{$edit_sup->account_holder}}">
                            </div>

                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" class="form-control" name="account_number" value="{{$edit_sup->account_number}}">
                            </div>

                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" value="{{$edit_sup->bank_name}}">
                            </div>

                             <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" class="form-control" name="branch_name" value="{{$edit_sup->branch_name}}">
                            </div>


                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$edit_sup->city}}">
                            </div>

                            <div class="form-group">
			                 <label for="img_preview" style="color:black">image</label>
			                  <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
		               		</div>

		               		 <div class="mb-3">
							    <label for="img_preview" style="color:black"></label><br>
		                    	<img src="{{url('supplier/').'/'.$edit_sup->image}}" id="blah" alt="" width="150" height="150" />
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