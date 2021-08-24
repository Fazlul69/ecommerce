@extends('backEnd.layouts.master')
@section('title','List Orders')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('orders.index')}}" class="current">Orders</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List of Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Country</th>
                        <th>Mobile</th>
                        <th>Shipping Charges</th>
                        <th>Coupon Code</th>
                        <th>Coupon Amount</th>
                        <th>Order Status</th>
                        <th>Payment Method</th>
                        <th>Grand Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($orders as $o)
                       <tr>
                           <td style="text-align: center; vertical-align: middle;">{{$o->users_email}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->name}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->address}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->city}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->state}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->pincode}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->country}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->mobile}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->shipping_charges}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->coupon_code}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->coupon_amount}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->order_status}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->payment_method}}</td>
                           <td style="text-align: center; vertical-align: middle;">{{$o->grand_total}}</td>
                           <td style="text-align: center; vertical-align: middle;">
                                <a href="{{route('orders.edit',$o->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="{{$o->id}}" rel1="delete-order" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                       </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
           var id=$(this).attr('rel');
           var deleteFunction=$(this).attr('rel1');
           swal({
               title:'Are you sure?',
               text:"You won't be able to revert this!",
               type:'warning',
               showCancelButton:true,
               confirmButtonColor:'#3085d6',
               cancelButtonColor:'#d33',
               confirmButtonText:'Yes, delete it!',
               cancelButtonText:'No, cancel!',
               confirmButtonClass:'btn btn-success',
               cancelButtonClass:'btn btn-danger',
               buttonsStyling:false,
               reverseButtons:true
           },function () {
              window.location.href="/admin/"+deleteFunction+"/"+id;
           });
        });
    </script>
@endsection