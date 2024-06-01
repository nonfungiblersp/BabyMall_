<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use App\Models\Wishlist;
use App\Services\RazorpayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Order as ApiOrder;

class OrderController extends Controller
{
    //
    public function addOrder(Request $request)  {
        if(isset($request->uid)
            && isset($request->pid)
            && isset($request->pname)
            && isset($request->ppic)
            && isset($request->amt)
            && isset($request->address)
            && isset($request->pay_type)
            && isset($request->totalamt)
            ){

                $table=new order();
                $table->uid=$request->uid;
                $table->pid=$request->pid;
                $table->ppic=$request->ppic;

                $table->pname=$request->pname;
                $table->amount=$request->amount;
                // $table->address=$request->address;
                // $table->payment_type=$request->payment_type;
                $table->totalamt=$request->totalamt;
                $table->save();
                return [
                    "status"=>true,
                    "message"=>"Added to Cart!!!",
                    "order"=>null
                ];



    }else{

        return [

            "status"=>false,
            "message"=>"Insufficient Parameter",
            "order"=>null
        ];
    }
        
    }


    public function plus($id)  {
        
        $data=order::whereId($id)->first();
        $data->quantity=$data->quantity+1;
        $data->totalamt=$data->quantity * $data->amt;
        $data->save();
        return redirect('cart');
    }
    public function getProductsByCat($id) {
        $id=session()->get('id');

        $order=order::where('uid',$id)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$id)->count();


        $data=Product::where('sid',$id)->get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }

    public function minus($id)  {
        
        $data=order::whereId($id)->first();
        $data->quantity=$data->quantity-1;
        $data->totalamt=$data->quantity * $data->amt;
        $data->save();
        return redirect('cart');
    }
    public function index()
    {
        //
        $Uid=session()->get('id');

        if(isset($Uid)){
            $data=order::where('status',0)->get();//select * from order;

        $count=DB::table('orders')
        ->selectRaw('sum(totalamt) as totalamt')
        ->where('uid', 1)->where('status',0)
        ->first();
    
        return view('userside.cart',["data"=>$data,"count"=> $count->totalamt]);
        return back()->withSuccess("success to Cart!!");
        }
        else{
            return view('userside.login_register');
        }

    }
    public function destroy($id)
    {
        $order= order::get()->where('id',$id)->first();
        $order->delete();
        return back()->withSuccess('Deleted Successfully');
    }

    public function  addtocart($id)  {

        $Uid=session()->get('id');
        
        $data=Order::where('status','0')
            ->where('pid',$id)
            ->where('uid',$Uid)->first();
            if(isset($data)){
                    $data->quantity=$data->quantity+1;
                    $data->save();
                    return back()->withSuccess("Added to Cart!!");
            }elseif(isset($Uid)){
        $uid=session()->get('id');
        $product=Product::whereId($id)->first();
        $uid="1";
        $table=new order();
        $table->uid=$uid;
        $table->pid=$product->id;
        $table->pname=$product->name;
        $table->ppic=$product->pic1;
        $table->amt=$product->price;
        $table->totalamt=$product->price;

        $table->quantity="1";

        $table->save();
        
        return back()->withSuccess("Added to Cart!!");
        }
        else{
            return redirect('/login_register')->withSuccess('login to add cart');
        }
        
    }
   public function checkout() {

        $uid=session()->get('id');

        if(isset($uid)){
            $data =order::where('status','0')
            ->where('uid',$uid)->get();

            foreach($data as $item){
                $item->status=1;
                $item->save();
            }

            // return response()->json($order);
            return redirect('cart');

        }
   
}
// public function showPaymentForm()
//     {
//         return view('payment_form');
//     }

//     protected $razorpay;

//     public function __construct(RazorpayService $razorpay)
//     {
//         $this->razorpay = $razorpay;
//     }
 }