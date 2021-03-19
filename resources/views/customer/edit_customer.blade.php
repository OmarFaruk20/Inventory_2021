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

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Update Customer Information</h3></div>
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
                        <form role="form" action="{{url('/update_customer')}}/{{$edit_cus->id}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$edit_cus->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$edit_cus->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$edit_cus->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" cols="30" rows="4">{{$edit_cus->address}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="address">Shop Name</label>
                                <input type="text" name="shopname" class="form-control" value="{{$edit_cus->shopname}}">
                            </div>

                            <div class="form-group">
                                <label for="Account Holder">Account Holder</label>
                                <input type="text" name="account_holder" class="form-control" value="{{$edit_cus->account_holder}}">
                            </div>
                            <div class="form-group">
                                <label for="Account Number">Account Number</label>
                                <input type="text" name="account_number" class="form-control" value="{{$edit_cus->account_number}}">
                            </div>

                            <div class="form-group">
                                <label for="Bank Name">Bank Name</label>
                                <input type="text" name="bank_name" class="form-control" value="{{$edit_cus->bank_name}}">
                            </div>

                            <div class="form-group">
                                <label for="Bank Branch">Bank Branch</label>
                                <input type="text" name="bank_branch" class="form-control" value="{{$edit_cus->bank_branch}}">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" value="{{$edit_cus->city}}">
                            </div>

                            <div class="form-group">
			                 <label for="img_preview" style="color:black">image</label>
			                  <input type="file" name="image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
		               		</div>

		               		 <div class="mb-3">
							    <label for="img_preview" style="color:black"></label><br>
		                    	<img src="{{url('customer/').'/'.$edit_cus->image}}" id="blah" alt="" width="150" height="150" />
		               		 </div>
                            <br>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
		</div>
	</div>
</div>
</div>
@endsection