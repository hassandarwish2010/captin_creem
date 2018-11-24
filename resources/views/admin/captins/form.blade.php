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

<div class="row">
  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="name">{{ __('lang.name') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="name" placeholder="{{ __('lang.name') }}" name="name" value="@if(old('name') != null){{ old('name') }}@elseif(isset($captin)){{$captin->name}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>

  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="phone">{{ __('lang.phone') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                <input type="text" class="form-control" id="phone" placeholder="{{ __('lang.phone') }}" name="phone" value="@if(old('phone') != null){{ old('phone') }}@elseif(isset($captin)){{$captin->phone}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
</div>

  <div class="col col-md-6">
      <div class="white-box">
        <div class="form-group">
            <label for="year">{{ __('lang.year') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class=""></i></div>
                <input type="text" class="form-control" id="year" placeholder="{{ __('lang.year') }}" name="year" value="@if(old('year') != null){{ old('year') }}@elseif(isset($captin)){{$captin->year}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('year'))
                <span class="help-block">
                    <strong>{{ $errors->first('year') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col col-md-6">
       <div class="white-box">
        <div class="form-group">
            <label for="car_brand">{{ __('lang.car_brand') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class=""></i></div>
                <input type="text" class="form-control" id="car_brand" placeholder="{{ __('lang.car_brand') }}" name="car_brand" value="@if(old('car_brand') != null){{ old('car_brand') }}@elseif(isset($captin)){{$captin->car_brand}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('car_brand'))
                <span class="help-block">
                    <strong>{{ $errors->first('car_brand') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>
</div>


<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
