<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session()->get('role') != "admin"){
            return redirect('/dashboard');
          }
        $table=new Banner;
        $data=$table->get(); //select * from banner;
        return view('banner.index',["data"=>$data]);
    }

    public function getBanner()
    {
       
        $data=Banner::get(); //select * from banner;
        
        return view('banner.index',["data"=>$data]);
    }

    





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "btitle"=>'required',
                "pic"=>'required|extensions:jpg,png,jpeg',
                
            ]
        );

    


        if (strcmp($request->active,"on")){
            $st=true;
        }else{
            $st=false;
        }
        $imgName=time()."banner".".".$request->pic->extension();
        $request->pic->move(public_path('banner'),$imgName);
        //
        $table=new Banner;
        $table->banner_title= $request->btitle;
        $table->banner_pic=$imgName;
        $table->active=$st;
        $table->save();
        return back()->withSuccess('Inserted Successfull');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //

        return view('banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $table=new Banner;
        $data=$table->where(['id'=>$banner->id])->get();
        $request->validate(
            [
                "btitle"=>'required',
                "pic"=>'required|extensions:jpg,png,jpeg',
                
            ]
        );

      

        if (strcmp($request->active,"on")){
            $st=true;
        }else{
            
            $st=false;
        }
        $imgName=time()."banner".".".$request->pic->extension();
        $request->pic->move(public_path('banner'),$imgName);
        //if(isset($request->pic)){
          //  $imgName=$banner->banner_pic;
        //}
        //
        $table=Banner::where('id',$banner->id)->first();

        $table->banner_title= $request->btitle;
        $table->banner_pic=$imgName;
        $table->active=$st;
        $table->save();
        return back()->withSuccess('Update Successfull');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        return back()->withSuccess("Deleted Successfully!!!");
    }
}

