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
                                <h3 class="panel-title">All Products <a href="{{url('/add.product')}}" class="btn btn-info pull-right">Add New</a></h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Selling Price</th>
                                            <th>Image</th>
                                            <th>Godaun</th>
                                            <th>Route</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    @php 
                                        $sl=1;
                                    @endphp
                                        <tbody>
                                            @foreach($show_prodcut as $product)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->product_code}}</td>
                                                <td>{{$product->selling_price}}</td>
                                                <td><img src="{{url('product/').'/'.$product->product_image}}" alt="img" style="width: 80px; height: 80px">
                                                </td>
                                                <td>{{$product->product_store}}</td>
                                                <td>{{$product->product_route}}</td>
                                                <td style="text-align:center;">
                                                   <button class="btn btn-warning btn-outline">
                                                       <a href="{{url('edit_product')}}/{{$product->id}}"><i class="fa fa-edit"></i></a>
                                                   </button> 
                                                    <button class="btn btn-danger btn-outline">
                                                    <a href="{{url('view_product')}}/{{$product->id}}"><i class="fa fa-eye"></i></a>
                                                    </button>

                                                    <button class="btn btn-danger btn-outline">
                                                    <a href="{{url('delete_product')}}/{{$product->id}}"><i class="fa fa-trash"></i></a>
                                                    </button>
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