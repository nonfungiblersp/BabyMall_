<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Category;
use App\Models\order;
use App\Models\Person;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Order as ApiOrder;

class AdminController extends Controller
{
    //

    public function logout(){

      session()->flush();
      return redirect('/login_register');
    }
    
    public function index() {
        return view('admin.register');
        
    }
    public function store(Request $request)
    {
        //$request->validate(
          //  [
            //    "uname"=>'required',
              //  ""=>'required',
                
            //]
       // );

        //
        $table=new Admin;
        $table->uname=$request->uname;
        $table->email=$request->email;
        $table->pwd=$request->pwd;
        $table->phno=$request->phno;
        $table->save();
        return redirect ('register_admin')->withSuccess('Registered Successfully');
    }

    public function about(){
      $id=session()->get('id');
      $order=order::where('uid',$id)->where('status','0')->count();
      $wishlist=Wishlist::where('uid',$id)->count();
      return view('userside.about',compact('wishlist','order'));
    }
    public function contact(){
      $id=session()->get('id');
      $order=order::where('uid',$id)->where('status','0')->count();
      $wishlist=Wishlist::where('uid',$id)->count();
      return view('userside.contact',compact('wishlist','order'));
    }
    public function index1() {
      if(session()->get('role') != "admin"){
        return redirect('/dashboard');
      }
      $order= DB::table('orders')
        ->where('status','!=','0')
      ->sum('totalamt')
      ;

      // $revenue=$order->totalamt;

      $bcount=Banner::count();
      $user=Person::count();
      $ccount=Category::count(); 
      $scount=Subcategory::count(); 
      $pcount=Product::count();
      $ocount=Order::where('status','!=','0')->count();
      $data=Order::latest()->paginate(4);
      return view('adminhome',compact('data','pcount','ccount','ocount','bcount','scount','user','order'));
  }
}
