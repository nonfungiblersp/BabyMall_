<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\order;
use App\Models\Subcategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
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
        $data=Subcategory::get(); 
        return view('subcategory.index',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data=Category::get();//select * from category;
        return view('subcategory.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "stitle"=>'required',
                "spic"=>'required|extensions:jpg,png,jpeg',
                
            ]
        );

        $imgName=time()."subcategory".".".$request->spic->extension();
        $request->spic->move(public_path('subcategory'),$imgName);
        //
        $table=new Subcategory;
        $table->stitle= $request->stitle;
        $table->spic=$imgName;
        $table->cid=$request->cid;

        $table->save();
        return redirect ('subcategories')->withSuccess('Inserted Successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        //
        return view('subcategory.edit',compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
        $table=new Subcategory;
        $data=$table->where(['id'=>$subcategory->id])->get();
        $request->validate(
            [
                "stitle"=>'required',
                "spic"=>'required|extensions:jpg,png,jpeg',
                
            ]
        );


        $imgName=time()."subcategory".".".$request->spic->extension();
        $request->spic->move(public_path('subcategory'),$imgName);
        //if(isset($request->pic)){
          //  $imgName=$banner->banner_pic;
        //}
        //
        $table=Subcategory::where('id',$subcategory->id)->first();

        $table->stitle= $request->stitle;
        $table->spic=$imgName;
       // $table->cid=$request->cid;
        $table->save();
        return redirect('subcategories')->withSuccess('Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        //
        $subcategory->delete();
        return redirect('subcategories')->withSuccess('Deleted Successfully');
    }

    public function getSubCat() {
        $uid=session()->get('id');

        $order=order::where('uid',$uid)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();

        $data=Subcategory::get();
        // dd($data);

        return view('userside.subcat',compact('data','order','wishlist'));

    }


    public function getSubCateogry($id) {
        
        $uid=session()->get('id');

        $order=order::where('uid',$id)->where('status','0')->count();

        $wishlist=Wishlist::where('uid',$uid)->count();

        $data=Subcategory::where('cid',$id)->get();
        // dd($data);

        return view('userside.subcat',compact('data','order','wishlist'));
    }
}
