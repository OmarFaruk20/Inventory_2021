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
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">Add Products</h3></div>
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
                        <form role="form" action="{{url('/store_product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Product Name">Product Name</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <label for="Category">Category</label>
                                @php
                                    $cat = DB::table('categories')->get();
                                @endphp
                                <select name="cat_id" class="form-control">
                                    @foreach($cat as $row)
                                    <option value="{{$row->id}}">{{$row->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Supplier">Supplier</label>
                                @php
                                    $sup = DB::table('suppliers')->get();
                                @endphp
                                <select name="sup_id" class="form-control">
                                    @foreach($sup as $row)
                                      <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Product Code">Product Code</label>
                                <input type="text" class="form-control" name="product_code" placeholder="Product Code">
                            </div>

                            <div class="form-group">
                                <label for="address">Godaun</label>
                                <input type="text" name="product_store" class="form-control" placeholder="Godaun">
                            </div>

                            <div class="form-group">
                                <label for="Account Holder">Product Route</label>
                                <input type="text" name="product_route" class="form-control" placeholder="Product Route">
                            </div>
                            <div class="form-group">
                                <label for="Buying Date">Buying Date</label>
                                <input type="text" name="buy_date" class="form-control" placeholder="Buying Date">
                            </div>

                            <div class="form-group">
                                <label for="Expire Date">Expire Date</label>
                                <input type="text" name="expire_date" class="form-control" placeholder="Expire Date">
                            </div>

                            <div class="form-group">
                                <label for="Buying Price">Buying Price</label>
                                <input type="text" name="buying_price" class="form-control" placeholder="Buying Price">
                            </div>

                            <div class="form-group">
                                <label for="Selling Price">Selling Price</label>
                                <input type="text" name="selling_price" class="form-control" placeholder="Selling Price">
                            </div>

                            <div class="form-group">
                             <label for="Product Image" style="color:black">Product Image</label>
                              <input type="file" name="product_image" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            </div>

                             <div class="mb-3">
                                <label for="Product Image" style="color:black"></label><br>
                                <img src="#" id="blah" alt="" width="150" height="150" />
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