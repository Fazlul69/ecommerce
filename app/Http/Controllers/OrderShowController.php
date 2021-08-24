<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders_model;
use DB;
use Session;

class OrderShowController extends Controller
{
    public function index()
    {
        $menu_active=5;
        $orders=Orders_model::all();
        return view('backEnd.order.index',compact('menu_active','orders'))->with('orders',$orders);
    }
    public function edit($id)
    {
        $menu_active=5;
        $orders=Orders_model::findOrFail($id);
        return view('backEnd.order.edit',compact('menu_active','orders'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'users_email' => 'required',
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'country' => 'required',
            'mobile' => 'required',
            'shipping_charges' => 'required',
            'coupon_code' => 'required',
            'coupon_amount' => 'required',
            'order_status' => 'required',
            'payment_method' => 'required',
            'grand_total' => 'required',
        ]);
        $orders=Orders_model::findOrFail($id);
        $orders->users_email = $request->users_email;
        $orders->name = $request->name;
        $orders->address = $request->address;
        $orders->city = $request->city;
        $orders->state = $request->state;
        $orders->pincode = $request->pincode;
        $orders->country = $request->country;
        $orders->mobile = $request->mobile;
        $orders->shipping_charges = $request->shipping_charges;
        $orders->coupon_code = $request->coupon_code;
        $orders->coupon_amount = $request->coupon_amount;
        $orders->order_status = $request->order_status;
        $orders->payment_method = $request->payment_method;
        $orders->grand_total = $request->grand_total;


        $orders->save();
        
        Session::flash('success','Data insert successfully');
        return redirect(route('orders.index'));
    }

    public function destroy($id)
    {
        $delete_order=Orders_model::findOrFail($id);
        $delete_order->delete();
        return back()->with('message','Order Delete!');
    }
}
