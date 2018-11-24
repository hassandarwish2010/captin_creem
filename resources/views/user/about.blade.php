@extends('layouts.layout')
@section('title')
{{ $about->ar_name }}
@endsection
  
@section('meta')  
  <meta name="description" content="{{ $about->description}}">
  <meta name="keywords" content="{{ $about->keywords }}">
  <meta name="permalink " content="{{ $about->permalink }}">

  <meta name="author" content="Typical Design">
@endsection

@include('layouts.navbar')
<div class="container-fluid" style="background-color: #f5f5f5">
    <div class="row">
    	<div class="col-md-1"></div>
		<div class="col-md-10">
			<br>
        <h3 class="benfits">{{ $about->ar_name }}</h3>
        <p style="    color: #1061e2;
    font-size: 20px;
    text-align: right;
    font-family: 'Cairo', sans-serif;
    background-color: #fff;
    padding-top: 30px;
    padding-bottom: 100px;
    border-style: solid;
    border-color: #fff;
    border-radius: 10px;
    text-align: justify;
    line-height: 45px;
    padding: 20px;
    ">{{strip_tags($about->ar_details )}}</p>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
@section('content')

@endsection