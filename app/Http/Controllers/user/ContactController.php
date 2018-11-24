<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Setting;
use App\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Setting $setting){

        $setting = Setting::first();
    	return view('user.contact',compact('setting'));
    }

    public function sendEmail(Request $request) {
        $this->validate(request(),[
              'name' => 'required|string|max:191|min:2',
              'email' => 'required|email',
              'details' => 'required|min:3|string',
            ]);
     //dd($request);
    $msg = Mail::create($request->all());
    $msg->save();
//dd($captin);
    return redirect()->back()->with(['success_msg' => 'Your massage sent successfully']);
  }
}
