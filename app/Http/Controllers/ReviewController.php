<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Review;
use App\Products_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{


    public function addReview(Request $request)
    {
        $review = new Review([
            'users_id'=> Auth::user()->id,
            'product_id'=> $request['product_id'],
            'rating'=> $request['rating'],
            'message'=>$request['message'],
        ]);
        $review->save();
        Session::flash('success','thanks for adding review!');
        return redirect()->back();
    }

}
