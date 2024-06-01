<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\order;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index()  {

        $banner=Banner::get();

        $cat=Category::get();//select * from category;
        $pro=Product::get();//select * from category;
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();
       

        return view('userside.home',compact('cat','pro','order','wishlist','banner'));
    }
    }

