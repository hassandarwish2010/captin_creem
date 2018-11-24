<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Product;
use App\Setting;

use Illuminate\Http\Request;

class AdvantureController extends Controller
{   
	public function index(){
       $setting = Setting::first();

       $services=Product::orderBy('id','desc')->get();
           foreach ($services as $service) {
       $service->ar_details = clean_limit_tall($service->ar_details);
            }

       return view('user.advanture_all',compact('services','setting'));
    }

    public function getOne($id){
       $service=Product::find($id);
       //     foreach ($services as $service) {
       // $service->description = clean_limit_tall($service->description);
       //      }

       return view('user.advanture_one',compact('service'));
    }
}
