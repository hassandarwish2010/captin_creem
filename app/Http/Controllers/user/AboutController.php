<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(About $about){
        $about = $about->first();
    	return view('user.about',compact('about'));
    }
}
