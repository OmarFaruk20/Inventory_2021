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
                    <div class="panel-heading"><h3 class="panel-title">Add Supplier</h3></div>
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
                        <form role="form" action="{{url('/store_supplier')}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
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
                                <label for="type">Supplier Type</label>
                                <select name="type" class="form-control">
                                    <option>Select Type</option>
                                    <option value="1">Distributor</option>
                                    <option value="2">Whole Seller</option>
                                    <option value="3">Broker</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shop">Shop</label>
                                <input type="text" class="form-control" name="shop" placeholder="Enter Shop">
                            </div>

                            <div class="form-group">
                                <label for="account_holder">Account Holder</label>
                                <input type="text" class="form-control" name="account_holder" placeholder="Enter Account Holder">
                            </div>

                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" class="form-control" name="account_number" placeholder="Enter Account Number">
                            </div>

                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Enter Bank Name">
                            </div>

                             <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" class="form-control" name="branch_name" placeholder="Enter Branch Name">
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