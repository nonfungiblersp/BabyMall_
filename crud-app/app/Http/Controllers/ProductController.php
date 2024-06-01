<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\order;
use App\Models\Product;
use App\Models\Review;
use App\Models\Subcategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(session()->get('role') != "admin"){
            return redirect('/dashboard');
          }
        $data=Product::get(); 
        return view('product.index',compact('data'));
        
        
    }

    public function getProducts($id) {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();


        $data=Product::where('sid',$id)->get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }

    public function getProductsLowtohight() {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();


        $data=Product::orderBy('price','asc')->get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }

    public function getProductshightolow() {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();


        $data=Product::orderBy('price','desc')->get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }

    public function getProductsLatest() {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();


        $data=Product::latest()->get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }




    public function getAll() {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();


        $data=Product::get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }

    public function getProductsByCat($id) {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();


        $data=Product::where('sid',$id)->get();
        // dd($data);

        return view('userside.shop',compact('data','order','wishlist'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data=Category::get(); //select * from category;
        return view('product.index_cat',compact('data'));
    }

    public function create1($id)  {

        $data=Subcategory::where('cid',$id)->get();
        return view('product.create',compact('data','id'));
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "sid"=>'required',
                "name"=>'required',
               "desc"=>'required',
               "price"=>'required|numeric',
                "shade"=>'required',
                 "dis"=>'required',
                 "pic1"=>'required',
                 "pic2"=>'required',
                "pic3"=>'required',
               "exdate"=>'required',
                "menufac"=>'required',
                
         ]
         );

        $imgName=time()."product1".".".$request->pic1->extension();
        $request->pic1->move(public_path('product'),$imgName);
        $imgName2=time()."product2".".".$request->pic2->extension();
        $request->pic2->move(public_path('product'),$imgName2);
        $imgName3=time()."product3".".".$request->pic3->extension();
        $request->pic3->move(public_path('product'),$imgName3);
        //
        $table=new Product;
        $table->cid= $request->cid;
        $table->sid= $request->sid;
        $table->name= $request->name;
        $table->desc= $request->desc;
        $table->price= $request->price;
        $table->shade= $request->shade;
        $table->dis= $request->dis;
        $table->pic1= $imgName;
        $table->pic2= $imgName2;
        $table->pic3= $imgName3;
        $table->exdate= $request->exdate;
        $table->menufac= $request->menufac;
        //$table->spic=$imgName;
        $table->save();
        return redirect('product1')->withSuccess('Insert Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data=Subcategory::get();
        $product=Product::whereId($id)->first();

        return view('product.edit',["data"=>$data,"id"=>$id,"product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // $request->validate(
        //     [
        //             "sid"=>'required',
        //             "name"=>'required',
        //             "desc"=>'required',
        //             "price"=>'required',
        //             "shade"=>'required',
        //             "disc"=>'required',
        //             "exp"=>'required',
        //             "manufac"=>'required',
                   
        //         ]
        //    );
          
           
           
           $table=Product::where('id',$id)->first();
   
           if(isset($request->pic1)){
   
           $imgName=time()."product1".".".$request->pic1->extension();
           $request->pic1->move(public_path('product'),$imgName);
           $table->pic1=$imgName;
       }
   
   
       if(isset($request->pic2)){
   
           $imgName2=time()."product2".".".$request->pic2->extension();
           $request->pic2->move(public_path('product'),$imgName2);
           $table->pic1=$imgName2;
       }
   
       if(isset($request->pic3)){
   
   
           $imgName3=time()."product3".".".$request->pic3->extension();
           $request->pic3->move(public_path('product'),$imgName3);
           $table->pic1=$imgName3;
       }
   
           $table->sid=$request->sid;
           $table->name=$request->name;
           $table->desc=$request->desc;
           $table->price=$request->price;
           $table->shade=$request->shade;
           $table->dis=$request->dis;
           $table->exdate=$request->exdate;
           $table->menufac=$request->menufac;
   
           //$table->spic=$imgName;
           $table->save();
   
   
   
           return redirect('product1')->withSuccess('Update Successfull');
       }
   
       /**
        * Remove the specified resource from storage.
        */
    public function destroy($id)
    {
        //
       Product::where('id',$id)->delete();
        return redirect('product1')->withSuccess('Deleted Successfully');
    }
    public function getProductById($id)
    {
        $pro=Product::whereId($id)->first();
        $uid=session()->get('id');
        $wishlist=Wishlist::where('uid',$uid)->count();
        $order=order::where('uid',$uid)->where('status','0')->count();
        $reviews=Review::where('pid',$id)->latest()->paginate(3);
        return view('userside.productdetail',compact('pro','wishlist','order','reviews'));  
     
    }

    public function search(Request $request) {

        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();
        $search=$request->search;

        $data = Product::where('name', 'like', '%'.$search.'%')->get();
        // dd($data);
        return view('userside.shop',compact('data','order','wishlist'));

        
    }
}
