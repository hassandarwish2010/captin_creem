		<br>
        <h3 class="benfits">مزايا التسجيل</h3>
		<div id="fh5co-features">
			<div class="container">
				<div class="row">
		      @foreach ($services as  $service)

					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<div class="feature-copy">
								<a href="{{ url('advantages/'.$service->id.'/'.$service->permalink) }}">
								<h3 style="    text-align: right;color: #183ed4;font-size: 20px; font-family: cairo;">{{ $service->ar_name }}</h3>
							    </a>
								<p style="text-align: right;font-size: 15px; font-family: cairo;">{{strip_tags($service->ar_details )}}</p>
								<img class="img-responsive" style="width: 100%;height: 150px" src="{{ asset('public/uploads/thumbs/' . $service->image) }}">
								<p><a href="{{ url('advantages/'.$service->id.'/'.$service->permalink) }}" class="benfits">المزيد ...</a></p>
							</div>
						</div>

					</div>
			  @endforeach

				</div>
	
			</div>
		</div>