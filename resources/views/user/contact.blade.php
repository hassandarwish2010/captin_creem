@extends('layouts.layout')
@section('title')
تواصل معنا
@endsection
  
@section('meta')  
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">

	<meta property="og:title" content="تواصل معنا"/>
	<meta property="og:image" content="{{ asset('public/images/emirates.jpg') }}"/>
	<meta property="og:site_name" content="Emirates Limousine"/>
	<meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection
  
@section('header')
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@include('layouts.navbar')
		<div id="fh5co-contact" class="fh5co-section-gray">
			 <h2 class="benfits" style="text-align: center;">معلومات التواصل</h2>
			<div class="container" style="text-align: right;">
			 <div class="row">

	              <div class="col-12">
	                @if(session()->has('success_msg'))
	                    <div class="alert alert-success">
	                        {{ session()->get('success_msg') }}
	                    </div>
	                @endif

	                @if(session()->has('error'))
	                    <div class="alert alert-danger">
	                        {{ session()->get('error') }}
	                    </div>
	                @endif
	              </div>

			 
				<div class="col-md-6 animate-box">
						<h3 class="section-title" style="color: #ff0000;font-size: 20px;text-align: right;font-family: 'Cairo', sans-serif;">عناوين التواصل</h3>

						<ul class="contact" style="list-style: none;">
							<li style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
								@if ($setting->address)
								<i class="fas fa-address-card  m-r-5"></i>
								 {{ $setting->address}}
								@endif
							</li>
							<li style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
								@if ($setting->phone)
								<i class="fas fa-phone"></i>
								 {{ $setting->phone}}
								@endif
							</li>
							<li style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
								@if ($setting->email)
								<i class="fas fa-envelope"></i>
								  {{ $setting->email}}
								@endif
							</li>
					    </ul>
                        <div style="text-align: center;">
								<span style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
									@if ($setting->facebook)
									<a href=" {{ $setting->facebook}}"><i class="fab fa-facebook-square fa-2x"></i></a>
									@endif
								</span>

								<span style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
									@if ($setting->twitter)
									<a href="{{ $setting->twitter }}"><i class="fab fa-twitter fa-2x"></i></a>
									@endif
								</span>
								

								<span style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
									@if ($setting->googleplus)
									<a href=" {{ $setting->googleplus}}"><i class="fab fa-google-plus-square fa-2x"></i></a>
									 
									@endif
								</span>

								<span style="color: #773477;font-size: 22px;text-align: right;font-family: 'Cairo', sans-serif;margin-top: 20px">
									@if ($setting->linkedin)
									<a href="{{ $setting->linkedin}}"><i class="fab fa-linkedin-in fa-2x"></i></a>
									  
									@endif
								</span>
                              </div>
							
					</div>
					    <div class="col-md-6">
							<div class="row">
						     <form class="form-full-width" action="{{ route('sendmail') }}" method="post" enctype="multipart/form-data">
                               @csrf
                               	<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="البريد الالكترونى" value='{{ old('email') }}' required>
									</div>
									<div class="input-group">
		                               @if ($errors->has('email'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('email') }}</strong>
		                                </span>
		                                @endif
		                            </div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 fh5co-footer-link">
									<div class="form-group">
										<input type="text" class="form-control" value='{{ old('name') }}' name="name" placeholder="الاسم" required>
									</div>
									<div class="input-group">
		                               @if ($errors->has('name'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('name') }}</strong>
		                                </span>
		                                @endif
		                            </div>
								</div>
{{-- 								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="البريد الالكترونى" value='{{ old('email') }}' required>
									</div>
									<div class="input-group">
		                               @if ($errors->has('email'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('email') }}</strong>
		                                </span>
		                                @endif
		                            </div>
								</div> --}}
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="details" class="form-control" id="" cols="30" rows="7" value='{{ old('details') }}' required placeholder="الرسالة"></textarea>
									</div>
									<div class="input-group">
		                               @if ($errors->has('details'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('details') }}</strong>
		                                </span>
		                                @endif
		                            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input  type="submit" value="ارسال" class="btn btn-primary center-block benfits">
									</div>
								</div>
							 </form>
							</div>
					    </div>
				</div>
			
			</div>
		</div>
	</div>	

@section('content')

@endsection