@extends('frontEnd.layouts.master')
@section('title','Detial Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="product-details"><!--product-details-->

                    <div class="col-sm-5">
                        <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                            <a href="{{url('products/large',$detail_product->image)}}">
                                <img src="{{url('products/small',$detail_product->image)}}" alt="" id="dynamicImage"/>
                            </a>
                        </div>

                        <ul class="thumbnails" style="margin-left: -10px;">
                            <li>
                                @foreach($imagesGalleries as $imagesGallery)
                                    <a href="{{url('products/large',$imagesGallery->image)}}" data-standard="{{url('products/small',$imagesGallery->image)}}">
                                        <img src="{{url('products/small',$imagesGallery->image)}}" alt="" width="75" style="padding: 8px;">
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-7">
                        <form action="{{route('cart.add')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="products_id" value="{{$detail_product->id}}">
                            <input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
                            <input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
                            <input type="hidden" name="product_color" value="{{$detail_product->p_color}}">
                            <input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
                            <div class="product-information"><!--/product-information-->
                                <img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                                <h2>{{$detail_product->p_name}}</h2>
                                <p>Code ID: {{$detail_product->p_code}}</p>
                                <span style="display:none">
                                    <select name="size" id="idSize" class="form-control">
                                    <option value="1">Select Size</option>
                                    <option value="black">Black</option>
                                    @foreach($detail_product->attributes as $attrs)
                                        <option value="{{$detail_product->id}}-{{$attrs->size}}">{{$attrs->size}}</option>
                                    @endforeach
                                </select>
                                </span><br>
                                <span>
                                    <span id="dynamic_price">Tk. {{$detail_product->price}}</span>
                                    <label>Quantity:</label>
                                    <input type="text" name="quantity" value="{{$totalStock}}" id="inputStock"/>
                                    
                                    <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                
                                </span>
                                <p><b>Availability:</b>
                            
                                        <span id="availableStock">In Stock</span>
                                
                                </p>
                                <p><b>Condition:</b> New</p>
                                <a href=""><img src="{{asset('frontEnd/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </form>

                    </div>
                    
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
               @php
                $total_projects = DB::table('reviews')->count();
               @endphp
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                            <li><a href="#reviews" data-toggle="tab">Reviews ({{$total_projects}})</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details" >
                            {{$detail_product->description}}
                        </div>

                        <div class="tab-pane fade" id="companyprofile" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('frontEnd/images/home/gallery1.jpg')}}" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('frontEnd/images/home/gallery3.jpg')}}" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('frontEnd/images/home/gallery2.jpg')}}" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('frontEnd/images/home/gallery4.jpg')}}" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- review part -->
                        @php 
                            $pId = $detail_product->id
                        @endphp
                        <div class="tab-pane fade" id="reviews" >
                            <div class="col-sm-12">
                                <div>
                                @foreach($reviews as $re)
                                    @if($re->product_id == $pId)
                                    <p>{{$re->id}}. <span class="r_name">{{$re->user->name}}</span><span><i class="fa fa-star" style="color:#e3e312"></i></span><span class="rat">({{$re->rating}})</span></p>
                                    <p><span class="r_com">Comment:</span> {{$re->message}}</p> 
                                    @endif
                                @endforeach
                                </div>

                                @if(Auth::check())
                                <form method="POST" action="{{route('review.add')}}">
                                @csrf
                                    <input type="text name=" class="p_id" name="product_id" value="{{$detail_product->id}}">
                                   
                                    <textarea  name="message" ></textarea>
                                    <input type="rating" name ="rating" placeholder="Give rating 1 to 5"/>
                                    <button type="submit" class="btn pull-right">Submit</button>
                                </form>
                                @endif
                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->

            
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner aabb">
                            <?php $countChunk=0;?>
                            @foreach($relateProducts->chunk(3) as $chunk)
                                <?php $countChunk++; ?>
                                <div class="item<?php if($countChunk==1){ echo' active';} ?>">
                                    @foreach($chunk as $item)
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{url('/products/small',$item->image)}}" alt="" style="width: 150px;"/>
                                                        <h2>{{$item->price}}</h2>
                                                        <p>{{$item->p_name}}</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->
            </div>
        </div>
    </div>

@endsection