		<footer>
				   <div class="col-12">
	                @if(session()->has('success_msg'))
	                    <div class="alert alert-success">
	                        {{ session()->get('success_msg') }}
	                    </div>
	                @endif

	                @if(session()->has('error_msg'))
	                    <div class="alert alert-danger">
	                        {{ session()->get('error') }}
	                    </div>
	                @endif
	               </div>
			<div id="footer">
				<div class="container-fluid">

					<div class="row row-bottom-padded-md">
					    <div class="col-xxs-12 col-sm-5 col-md-5">
							<div class="row">
						     <form class="form-full-width" action="{{ route('sendmail') }}" method="post" enctype="multipart/form-data">
                               @csrf
                               <div class="col-md-12">
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
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" value='{{ old('name') }}' name="name" placeholder="الاسم" required>
									</div>
{{-- 									<div class="input-group">
		                               @if ($errors->has('name'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('name') }}</strong>
		                                </span>
		                                @endif
		                            </div> --}}
							</div>

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
					<div class="col-xxs-12 col-sm-7 col-md-7">
							<!-- START #fh5co-menu-wrap -->
						<ul class="sf-menu " id="fh5co-primary-menu">
							
							<li style="font-family:Cairo"><a style="color:#fff;font-size: 14px" href="{{ route('contact') }}">{{ trans('lang.contact_us') }}</a></li>
							<li style="font-family:Cairo;color: aliceblue;"><a  style="color:#fff;font-size: 14px"href="{{ url('information/معلومات_مهمة') }}">{{ trans('lang.articles') }}</a></li>
							
							<li style="font-family:Cairo;color: aliceblue;"><a style="color:#fff;font-size: 14px" href="{{ route('about') }}">{{ trans('lang.about') }}</a></li>
							<li style="font-family:Cairo;color: aliceblue;"><a style="color:#fff;font-size: 14px" href="{{ route('advantages') }}">مزايا التسجيل</a></li>
							<li style="font-family:Cairo;"><a style="color:#fff;font-size: 14px" href="{{ url('login/تسجيل') }}">{{ trans('lang.Login') }}</a></li>
							<li style="font-family:Cairo;color: aliceblue;"><a style="color:#fff;font-size: 14px" href="{{ route('index') }}">{{ trans('lang.home') }}</a></li>
						</ul>
								<br><br>

				    </div>
				       		 <div class="col-md-12">
								{{-- <p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p> --}}
								<br>
								<p class="text-center center-block">Copyright 2018<a href="#"></a>. All Rights Reserved <span class="">Typical Design</span></p>
							</div>
					</div>
{{-- 					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2018<a href="#"></a>. All Rights Reserved. <br>Typical Design</p>
						</div>
					</div> --}}
				</div>
			</div>
		</footer>