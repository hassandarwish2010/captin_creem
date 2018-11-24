@extends('layouts.layout')
@section('title')
معلومات مهمة
@endsection
  
@section('meta')  
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">

	<meta property="og:title" content="معلومات مهمة"/>
	<meta property="og:image" content="{{ asset('public/images/emirates.jpg') }}"/>
	<meta property="og:site_name" content="Emirates Limousine"/>
	<meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection
  

  @include('layouts.navbar')
		<!-- end:header-top -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
			        <h3 style="text-align: center;
                     font-family: 'Cairo', sans-serif;color: #d2d80b;font-size: 35px;    margin-bottom: 130px;">معلومات مهمة</h3>
     	<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2 style="color: #4e1010;text-align: center;width: 100%"></h2>

				</div>
			</div>
			<div class="row">
		  @foreach ($news as  $new)
				<div class="col-md-4">
					<a href="{{ url('information/'.$new->id.'/'.$new->permalink) }}">
				    <h3 style=" text-align: right;color: #fff;font-size: 20px; font-family: cairo;height: 20px;margin-top: -50px;">{{ $new->ar_title }}</h3>
				    </a>
					<div class="box-testimony animate-box">
						<blockquote>
						 <img src="{{ asset('public/uploads/thumbs/' . $new->image) }}" style="" class="img-responsive">
						 <p style="text-align: right;    text-align: justify;
                           line-height: 45px;font-size: 15px; font-family: cairo">{{strip_tags($new->ar_details )}}</p>
						</blockquote>
						<p><a href="{{ url('information/'.$new->id.'/'.$new->permalink) }}" style="color: #fff;  text-align: right;
                           font-family: 'Cairo', sans-serif;">المزيد ...</a></p>
					</div>
					
				</div>
			 @endforeach
			</div>
		</div>
	    </div>



@section('content')

@endsection