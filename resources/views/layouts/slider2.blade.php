
<!-------- don't use this html this only for margin top remove this ---------------------->
<style>
.topmargin{
  margin-top:-300px;
}
.registration{
	
margin-top: -360px;width: 100%;border-radius:7px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 
   	$('#regform').removeClass("registration");
  	//$('#regform').style.margin-top='0px';
	//alert('ssss');

}else{
$(document).ready(function() {
  $('.formregister').toggleClass('topmargin');
});


 }
</script>


<div id="demo" class="carousel slide container-fluid" data-ride="carousel">

  <!-- Indicators -->
{{--   <ul class="carousel-indicators container-fluid">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> --}}
  <?php 
  $a=1;
  ?>
  
  <!-- The slideshow -->
  <div class="carousel-inner" style="height: 400px">
    @foreach($banners as $banner)
   <?php $class = $loop->first ? 'item active': 'item'; ?> 
    <div class="{{ $class }}">
      <img src="{{ asset('public/uploads/thumbs/' . $banner->image) }}" alt="" width="100%" height="300">
    </div>
    @endforeach
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
          <div class="container">
            <div class="row">
              <div class="col-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-xxs-12">
                <div class="tabulation animate-box formregister" id="regform" >
                  <div class="tab-content" >
                   <div role="tabpanel" class="tab-pane active" id="flights">
                    <form class="form-full-width" action="{{ route('save_captin') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="col-xxs-12 margin10px " style="width: 100%">
                        <h4 style="font-family:Cairo">للتسجيل فى كابتن كريم يمكنك تسحيل بياناتك وسنقوم بالتواصل معك</h4>
                        <div class="input">
                          <input type="text" value='{{ old('name') }}' class="form-control" id="name" name="name" placeholder="الاسم" style="width: 100%" required />
                        </div>
                          <div class="input-group">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                          </div>
                      </div>
                     
                      <div class="col-xxs-12  alternate margin10px">
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
                      
                      <div class="col-xxs-12  mt alternate margin10px" >
                        <div class="input-field">
                          <input type="text" class="form-control" id="car_brand" name="car_brand" placeholder="ماركة السيارة" required style="width: 100%;height:40px"/>
                        </div>
                          <div class="input-group">
                          @if ($errors->has('car_brand'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('car_brand') }}</strong>
                              </span>
                          @endif
                          </div>
                      </div>
                      
                      <div class="col-xxs-12  mt alternate margin10px">
                        <div class="input-field">
                          <input type="text" class="form-control" name="year" id="year" placeholder="سنة الصنع" style="width: 100% ;height:40px" required/>
                        
                        </div>
                         <div class="input-group">
                          @if ($errors->has('year'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('year') }}</strong>
                              </span>
                          @endif
                          </div>
                      </div>
                     
                      <div class="col-xs-12">
                       <input type="submit" class="btn btn-primary btn-block" value="تسجيل">
                      </div>
                     <br>
                    </form>
                   </div>

                  
                  </div>

                </div>
              </div>
            </div>

          </div>