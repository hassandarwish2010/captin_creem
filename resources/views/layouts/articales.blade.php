		<div id="fh5co-testimonial">
			        <h3 style="text-align: center;
                     font-family: 'Cairo', sans-serif;color: #d2d80b;font-size: 35px;margin-top: -60px;">معلومات مهمة</h3>
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
				    <h3 style=" text-align: right;color: #fff;font-size: 20px; font-family: cairo;height: 20px;">{{ $new->ar_title }}</h3>
				    </a>
				    <br>
					<div class="box-testimony animate-box">
						<blockquote>
						 <img src="{{ asset('public/uploads/thumbs/' . $new->image) }}" style="" class="img-responsive">
						 <p style="text-align: right;">{{strip_tags($new->ar_details )}}</p>
						</blockquote>
						<p><a href="{{ url('information/'.$new->id.'/'.$new->permalink) }}" style="color: #fff;  text-align: right;
                           font-family: 'Cairo', sans-serif;margin-bottom: 10px;">المزيد ...</a></p>
					</div>
					
				</div>
				<br><br>
			 @endforeach
			</div>
		</div>
	    </div>