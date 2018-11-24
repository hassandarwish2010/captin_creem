@extends('layouts.layout')
@section('title')
الرئيسية
@endsection
  
@section('meta')  
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">

  <meta property="og:title" content="الرئيسية"/>
  <meta property="og:image" content="{{ asset('public/images/emirates.jpg') }}"/>
  <meta property="og:site_name" content="Emirates Limousine"/>
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection
  @include('layouts.navbar')
		<!-- end:header-top -->
	
  @include('layouts.slider2')

   @include('layouts.advantager')
		
 @include('layouts.articales')

	

@section('content')

@endsection