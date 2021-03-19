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
                    <div class="panel-heading"><h3 class="panel-title">Supplier Details</h3></div>
                    
                    <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
                                <input type="text" class="form-control" name="name" value="{{$single_view->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$single_view->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$single_view->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" cols="30" rows="4" placeholder="Enter Address">{{$single_view->address}}</textarea>
                            </div>

                             <div class="form-group">
                                <label for="type">Profession</label>
                                <select name="type" class="form-control">
                                    <option>{{$single_view->type}}</option>
                                    <!-- <option value="1">Distributor</option>
                                    <option value="2">Whole Seller</option>
                                    <option value="3">Broker</option> -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shop">Shop</label>
                                <input type="text" class="form-control" name="shop" value="{{$single_view->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="account_holder">Account Holder</label>
                                <input type="text" class="form-control" name="account_holder" value="{{$single_view->account_holder}}">
                            </div>

                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" class="form-control" name="account_number" value="{{$single_view->account_number}}">
                            </div>

                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" value="{{$single_view->bank_name}}">
                            </div>

                             <div class="form-group">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" class="form-control" name="branch_name" value="{{$single_view->branch_name}}">
                            </div>


                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$single_view->city}}">
                            </div>

		               		 <div class="form-group">
							    <label for="img_preview" style="color:black">Image</label><br>
		                    	<img src="{{url('supplier/').'/'.$single_view->image}}" id="blah" alt="" width="150" height="150" />
		               		 </div>
                            <br>
                            
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
		</div>
			<!-- End Row -->
	</div>
</div>
</div>
@endsection