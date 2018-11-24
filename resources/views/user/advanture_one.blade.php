@extends('layouts.layout')
@section('title')

@endsection
  
@section('meta')  
  <meta name="description" content="{{ $service->description}}">
  <meta name="keywords" content="{{ $service->keywords }}">
  <meta property="og:title" content="{{ $service->ar_name }}"/>
  <meta property="og:image" content="{{ asset('public/images/emirates.jpg') }}"/>
  <meta property="og:site_name" content="Emirates Limousine"/>
  <meta name="author" content="Typical Design">
@endsection
  

  @include('layouts.navbar')
		<!-- end:header-top -->
	

 		<br>
        <h3 class="benfits">{{ $service->ar_name }}</h3>
		<div id="fh5co-features" style='color:#f5f5f5'>
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box">

						<div class="">
							<div class="feature-copy">
								{{-- <h3 style="    text-align: right;color: #183ed4;font-size: 20px; font-family: cairo;"></h3> --}}
								{{-- <p style="text-align: right;font-size: 15px; font-family: cairo;">{{ $service->ar_details }}</p> --}}
								<img class="img-responsive center-block" style="width: 85%; height: 350px" src="{{ asset('public/uploads/thumbs/' . $service->image) }}">
								<p style="text-align: right;margin-top:40px ; font-size: 20px;font-family: cairo;color: #000;border-style: solid;border-color: #fff;border-radius: 10px;text-align: justify;line-height: 45px;padding: 20px;">{{strip_tags($service->ar_details )}}</p>
							</div>
						</div>

					</div>


				</div>

			</div>
		</div>

		



@section('content')

@endsection