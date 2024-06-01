<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //

    
    


    public function addReview(Request $request)  {
        $uid=session()->get('id');
        if(isset($uid)){

            $table=new Review();
            $table->uid=$uid;
            $table->pid=$request->pid;
            $table->name=$request->name;
            $table->email=$request->email;
            $table->message=$request->message;
            $table->rating=$request->rating;

            $table->save();

            return back()->withSuccess("Review Added Successfully!!!");


        }else{
            //login
        }
        
    }
}
