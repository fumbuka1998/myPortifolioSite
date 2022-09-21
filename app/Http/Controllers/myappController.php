<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class myappController extends Controller
{
    public function index()
    {
        return view('myPortifolio');
    }

    public function myEvent()
    {
        return view('myevent');
    }

    

    public function myCV()
    {
        return view('cv');
    }


    public function myCont()
    {
        return view('contact');
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Message::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
