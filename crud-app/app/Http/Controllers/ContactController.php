<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        //
        if(session()->get('role') != "admin"){
            return redirect('/dashboard');
          }
        $data=Contact::paginate(5); 
        return view('contact.index',compact('data'));
    }


    public function create()
    {
        //
        return view('contact.create');
    }
    public function store(Request $request)
{    //
    $request->validate(
        [
            "name"=>'required',
            "email"=>'required',
            "subject"=>'required',
            "message"=>'required',
            
        ]
    );

    //$imgName=time()."subcategory".".".$request->spic->extension();
    //$request->spic->move(public_path('subcategory'),$imgName);
    //
    $table=new Contact;
    $table->name= $request->name;
    $table->email=$request->email;
    $table->subject=$request->subject;
    $table->message=$request->message;
    
   $table->save();
    return back ()->withSuccess('Inserted Successfully');
    
}
} 