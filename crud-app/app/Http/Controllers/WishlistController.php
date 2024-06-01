<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    //

    public function addWishlist($id) {
        
        $table=new Wishlist();
        $uid=session()->get('id');
        if(isset($uid)){

            $count=Wishlist::where('uid',$uid)
            ->where('pid',$id)->count();

            if($count>0){
                 return back()->withSuccess("already into wishlist");

            }else{
                $table->uid=$uid;
                $table->pid=$id;
                $table->save();
        
                return back()->withSuccess("Added to wishlist");
               
            }
        }else{
            return redirect('/login_register');
        }

    }

    public function removeWishlist($id){
            $wishlist=Wishlist::whereId($id)->delete();
            return back()->withSuccess("Removed");
    }


    public function removeAddWishlist($id){
        $uid=session()->get('id');
        $w=Wishlist::where("id",$id)->first();
        $data=Order::where('status','0')
        ->where('uid',$uid)
        ->where('pid',$w->pid)->first();
        // dd($data);
            if(isset($data)){
                    $data->quantity=$data->quantity+1;
                    $data->totalamt=($data->totalamt*$data->quantity);
                    $data->save();
                    $wishlist=Wishlist::whereId($id)->delete();
                    return back()->withSuccess("Added to Cart!!");
            }
            else{
                // $uid=session()->get('id');
                $product=Product::whereId($w->pid)->first();
                // $uid="1";
                $table=new order();
                $table->uid=$uid;
                $table->pid=$product->id;
                $table->pname=$product->name;                
                $table->ppic=$product->pic1;
                $table->amt=$product->price;
                $table->totalamt=$product->price;
                $table->quantity="1";
                $table->save();
                $wishlist=Wishlist::whereId($id)->delete();
                return back()->withSuccess("Removed");
            }
}

    public function index()
    {
        //
        $uid= session()->get('id');


        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();
        


        $data=Wishlist::where('uid',$uid)->get();
        $count=DB::table('orders')
        ->where('uid', $uid)
        ->count();
    
        $table=Wishlist::get();
        $product=Product::get();
        // dd($product);
      
        // dd($table);
       return view('userside.wishlist',compact('data','order','wishlist','table','product'));
    }   


    public function getWishlist() {

       

        return view('userside.wishlist',compact('table','product'));
        
    }
}
