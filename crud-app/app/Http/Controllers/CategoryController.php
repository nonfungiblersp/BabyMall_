<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $data=Category::paginate(5); 
        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "ctitle"=>'required',
                "cpic"=>'required',
                
            ]
        );

        $imgName=time()."category".".".$request->cpic->extension();
        $request->cpic->move(public_path('category'),$imgName);
        //
        $table=new Category;
        $table->ctitle= $request->ctitle;
        $table->cpic=$imgName;
        $table->save();
        return redirect ('categories')->withSuccess('Inserted Successfully');
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $table=new Category;
        $data=$table->where(['id'=>$category->id])->get();
        $request->validate(
            [
                "ctitle"=>'required',
                "cpic"=>'required',
                
            ]
        );


        $imgName=time()."category".".".$request->cpic->extension();
        $request->cpic->move(public_path('category'),$imgName);
        //if(isset($request->pic)){
          //  $imgName=$banner->banner_pic;
        //}
        //
        $table=Category::where('id',$category->id)->first();

        $table->ctitle= $request->ctitle;
        $table->cpic=$imgName;
        $table->save();
        return redirect('categories')->withSuccess('Update Successfull');
        

        
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('categories')->withSuccess('Deleted Successfully');
    }
}