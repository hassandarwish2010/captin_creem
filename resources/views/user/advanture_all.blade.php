@extends('layouts.layout')
@section('title')
مزيا التسجيل
@endsection
  
  @section('meta')  
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">

	<meta property="og:title" content="مزيا التسجيل"/>
	<meta property="og:image" content="{{ asset('public/images/emirates.jpg') }}"/>
	<meta property="og:site_name" content="Emirates Limousine"/>
	<meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
@endsection

  @include('layouts.navbar')
		<!-- end:header-top -->
		<div class="container">
			<div class="row">
			  <div class="col-md-12" style="margin-top:120px"></div>
              <div class="col-sm-6 col-md-6 col-xxs-12">
                <div class=" animate-box" style="width: 100%; border: solid 1px  #ccc;margin-top: -68px;">
                  <div class="tab-content">
                   <div role="tabpanel" class="tab-pane active" id="flights">
	                 <form class="form-full-width" action="{{ route('save_captin') }}" method  ="post" enctype="multipart/form-data">
	                      @csrf
	                      <div class="col-xxs-12" style="width: 100%">
	                        <div class="input">
	                          <input type="text" value='{{ old('name') }}' class="form-control" id="name" name="name" placeholder="الاسم" style="width: 100%" required />
	                        </div>
	{{--                           <div class="input-group">
	                            @if ($errors->has('name'))
	                                <span class="help-block">
	                                    <strong>{{ $errors->first('name') }}</strong>
	                                </span>
	                            @endif
	                          </div> --}}
	                      </div>
	                      <br>
	                      <div class="col-xxs-12  alternate">
	                        <div class="input-field">
	                          <input type="text" class="form-control" id="phone" name="phone" placeholder="التلفون" style="width: 100%" required/>
	                        </div>
	                          <div class="input-group">
	                          @if ($errors->has('phone'))
	                              <span class="help-block">
	                                  <strong>{{ $errors->first('phone') }}</strong>
	                              </span>
	                          @endif
	                          </div>
	                      </div>
	                      <br>
	                      <div class="col-xxs-12  mt alternate">
	                        <div class="input-field">
	                          <input type="text" class="form-control" id="car_brand" name="car_brand" placeholder="ماركة السيارة" style="width: 100%;height:40px" required/>
	                        </div>
	                          <div class="input-group">
	                          @if ($errors->has('car_brand'))
	                              <span class="help-block">
	                                  <strong>{{ $errors->first('car_brand') }}</strong>
	                              </span>
	                          @endif
	                          </div>
	                      </div>
	                      <br>
	                      <div class="col-xxs-12  mt alternate">
	                        <div class="input-field">
	                          <input type="text" class="form-control" name="year" id="year" placeholder="سنة الصنع" style="width: 100% ;height:40px" required/>
	                          <br>
	                        </div>
	                         <div class="input-group">
	                          @if ($errors->has('year'))
	                              <span class="help-block">
	                                  <strong>{{ $errors->first('year') }}</strong>
	                              </span>
	                          @endif
	                          </div>
	                      </div>
	                      <br>
	                      <div class="col-xs-12">
	                       <input type="submit" class="btn btn-primary btn-block" value="تسجيل">
	                      </div>
	                     <br>
                    </form>
                   </div>

                  
                  </div>

                </div>
              </div>
              <div class="col-sm-6 col-md-6">
					<img class="img-responsive" src="{{ asset('public/images/creem.jpg') }}" style="height: 402px;margin-top: -85px;" />
			  </div>
            </div>

			</div>
			
		</div>
	

 		<br>
        <h3 class="benfits" style="margin-top:55px">مزايا التسجيل</h3>
		<div id="fh5co-features" style='color:#f5f5f5'>
			<div class="container">
				<div class="row">
		      @foreach ($services as  $service)

					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<div class="feature-copy">
								<a href="{{ url('advantages/'.$service->id.'/'.$service->permalink) }}">
								<h3 style="    text-align: right;color: #183ed4;font-size: 20px; font-family: cairo;">{{ $service->ar_name }}</h3>
							    </a>
								<p style="text-align: right;font-size: 15px; font-family: cairo;    text-align: justify;
                                 line-height: 45px;">{{strip_tags($service->ar_details )}}</p>
								<img class="img-responsive" style="width: 100%;height: 150px" src="{{ asset('public/uploads/thumbs/' . $service->image) }}">
								<p><a href="{{ url('advantages/'.$service->id.'/'.$service->permalink) }}" class="benfits">المزيد ...</a></p>
							</div>
						</div>

					</div>
			  @endforeach

				</div>
			{{-- 	<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<img class="img-responsive" src="{{ asset('public/images/car4.jpg') }}">
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Solo Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<img class="img-responsive" src="{{ asset('public/images/car.jpg') }}">
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<img class="img-responsive" src="{{ asset('public/images/car5.jpg') }}">
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>

		



@section('content')

@endsection