<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\order;
use App\Models\Person;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Wishlist;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class PersonController extends Controller
{
    //
    public function index() {
        $cat=Category::get();//select * from category;
        $pro=Product::get();//select * from category;
        $id=session()->get('id');

        $order=order::where('uid',$id)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$id)->count();
        $banner=Banner::get();

        return view('userside.home',compact('cat','pro','order','wishlist','banner'));
        
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                "uname"=>'required',
                "pass"=>'required',
                "email"=>'required'
            ]
        );

        $table=new Person();
        $table->uname= $request->uname;
        $table->pass=$request->pass;
        $table->email=$request->email;
        $table->save();
        return redirect('login_register');
    }
    public function Login_user(Request $request)
    {
        $request->validate(
            [
               "mno"=>'required|digits:10',
               "pass"=>'required',
            ]
            );   
        

            $data=Person::where('mno',$request->mno)->where('pass',$request->pass)->first();
            if(isset($data)){
                $request->session()->put('id', $data->id);
                $request->session()->put('name', $data->uname);

                return view('user.home');
            }else{
                return back()->withSuccess('Credentials Incorrect');

            }
        }
        public function index1() {
            return view('person.u_login');
    }

    public function loggedin(Request $r){
        $r->validate([
            'uname'=>'required',
            'pass'=>'required'
  
        ]);
        
        $cat=Category::get();//select * from category;
        $pro=Product::get();//select * from category;
        $banner=Banner::get();
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();

        $data=Person::where('uname',$r->uname)
        ->where('pass',$r->pass)->first();
  
        // dd($r->pass);
        if((strcmp($r->uname,"admin")==0) && (strcmp($r->pass,"admin")==0)){
            $r->session()->put('role','admin');
            $order= DB::table('orders')
            ->where('status','!=','0')
            ->sum('totalamt');

      // $revenue=$order->totalamt;

        $bcount=Banner::count();
        $user=Banner::count();
        $ccount=Category::count(); 
        $scount=Subcategory::count(); 
        $pcount=Product::count();
        $ocount=Order::where('status','!=','0')->count();
        $data=Order::latest()->paginate(4);
      return view('adminhome',compact('data','pcount','ccount','ocount','bcount','scount','user','order'));
        }
        else if($data!=null){
            $r->session()->put('uname',$r->uname);
            $r->session()->put('id',$data->id);
            $r->session()->put('role','user');
            $cat=Category::get();//select * from category;
            $pro=Product::get();//select * from category;

        return redirect('/index');
           
        }
        else{
            return view('userside.login_register');
        }
        
  
       
    }

    public function dashboard() {
        
        
    }
}