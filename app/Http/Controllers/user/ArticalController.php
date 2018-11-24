<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\News;
use App\Setting;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function index(){
       $setting = Setting::first();

       $news=News::orderBy('id','desc')->get();
           foreach ($news as $new) {
       $new->ar_details = clean_limit_tall($new->ar_details);
            }

       return view('user.articals_all',compact('news','setting'));
    }

       public function getOne($id,$permalink){
       $new=News::find($id);
       //     foreach ($services as $service) {
       // $service->description = clean_limit_tall($service->description);
       //      }

       return view('user.artical_one',compact('new'));
    }
}
