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
                                <h3 class="panel-title">All Category <a href="{{url('/add.category')}}" class="btn btn-info pull-right">Add New</a></h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    @php 
                                        $sl=1;
                                    @endphp
                                        <tbody>
                                            @foreach($show_cat as $cat)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{$cat->category_name}}</td>
                             
                                                <td style="text-align:center;">
                                                   <button class="btn btn-warning btn-outline">
                                                       <a href="{{url('edit_category')}}/{{$cat->id}}"><i class="fa fa-edit"></i></a>
                                                   </button> 
                                                    <button class="btn btn-danger btn-outline">
                                                    <a href="{{url('delete_category')}}/{{$cat->id}}"><i class="fa fa-trash"></i></a>
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