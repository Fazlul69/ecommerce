@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div>@include('frontEnd.layouts.category_menu')</div>
                        <div>@include('frontEnd.layouts.design')</div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @include('frontEnd.layouts.carousel')
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>$ {{$product->price}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection