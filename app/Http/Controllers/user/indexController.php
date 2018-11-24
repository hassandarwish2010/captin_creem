<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Product;
use App\News;
use App\Banner;
use App\Setting;

use App\Captin;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CaptinRequest;


class indexController extends Controller
{
    public function index()
    {
       $setting = Setting::first();

      $banners=Banner::all();
        foreach ($banners as $banner) {
       $banner->description = clean_limit_tall($banner->description);
            }

      $services=Product::paginate(6);
           foreach ($services as $service) {
       $service->ar_details = clean_limit_tall($service->ar_details);
            }
       $news=News::paginate(6);
           foreach ($news as $new) {
           $new->ar_details = clean_limit_tall($new->ar_details);
            }

        return view('user.home',compact('services','news','banners','setting'));

    }

    public function saveCaptin(Request $request) {
        $this->validate(request(),[
              'name' => 'required|string|max:191|min:2|unique:captins',
              'phone' => 'required|unique:captins',
              'car_brand' => 'required',
              'year' => 'required|integer',
            ]);
     //dd($request);
    $captin = Captin::create($request->all());
    $captin->save();
//dd($captin);
    return redirect()->back()->with(['success' => 'captin inserted successfully']);
  }
}
