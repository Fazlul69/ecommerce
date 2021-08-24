@extends('backEnd.layouts.master')
@section('title','Edit Order List')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('orders.index')}}">Orders</a> <a href="#" class="current">Edit Order</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Edit Order</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('orders.update',$orders->id)}}" method="post" class="form-horizontal">
                @csrf

                    <div class="control-group">
                        <label for="name" class="control-label">Name</label>
                        <div class="controls{{$errors->has('name')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->name}}" name="name" placeholder="Name" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="users_email" class="control-label">Users Email</label>
                        <div class="controls{{$errors->has('users_email')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->users_email}}" name="users_email" placeholder="Users Email" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="address" class="control-label">Address</label>
                        <div class="controls{{$errors->has('address')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->address}}" name="address" placeholder="Address" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="city" class="control-label">City</label>
                        <div class="controls{{$errors->has('city')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->city}}" name="city" placeholder="City" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="state" class="control-label">State</label>
                        <div class="controls{{$errors->has('state')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->state}}" name="state" placeholder="State" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="pincode" class="control-label">Pincode</label>
                        <div class="controls{{$errors->has('pincode')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->pincode}}" name="pincode" placeholder="Pincode" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="country" class="control-label">Country</label>
                        <div class="controls{{$errors->has('country')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->country}}" name="country" placeholder="Country" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="mobile" class="control-label">Mobile</label>
                        <div class="controls{{$errors->has('mobile')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->mobile}}" name="mobile" placeholder="Mobile" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="shipping_charges" class="control-label">Shipping Charges</label>
                        <div class="controls{{$errors->has('shipping_charges')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->shipping_charges}}" name="shipping_charges" placeholder="Shipping Charges" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="coupon_code" class="control-label">Coupon Code</label>
                        <div class="controls{{$errors->has('coupon_code')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->coupon_code}}" name="coupon_code" placeholder="Coupon Code" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="coupon_amount" class="control-label">Coupon Amount</label>
                        <div class="controls{{$errors->has('coupon_amount')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->coupon_amount}}" name="coupon_amount" placeholder="Coupon Amount" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="order_status" class="control-label">Order Status</label>
                        <div class="controls{{$errors->has('order_status')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->order_status}}" name="order_status" placeholder="Order Status" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="payment_method" class="control-label">Payment Method</label>
                        <div class="controls{{$errors->has('payment_method')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->payment_method}}" name="payment_method" placeholder="Payment Method" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="grand_total" class="control-label">Grand Total</label>
                        <div class="controls{{$errors->has('grand_total')?' has-error':''}}">
                            <input type="text" class="form-control"  value="{{$orders->grand_total}}" name="grand_total" placeholder="Grand Total" minlength="5" maxlength="15" style="width: 400px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Update Order Details</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection