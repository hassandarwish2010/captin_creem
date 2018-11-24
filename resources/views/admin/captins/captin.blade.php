@extends('admin.layouts.layoutcaptin')


@include('admin/layouts/datatable')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
{{--         <h4 class="page-title">{{ __('lang.admins') }}</h4>
 --}}    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
{{--         <li class="active">{{ __('lang.captins') }}</li>
 --}}      </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
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
  <div class="col-sm-12">
      <div class="white-box">
{{--           <a class="box-title m-b-1 btn btn-info btn-rounded" href="{{ route('captins.create') }}">{{ __('lang.add_new') }}</a> --}}
          <div class="table-responsive">
              <table id="table" class="display nowrap" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ __('lang.name') }}</th>
                          <th>{{ __('lang.phone') }}</th>
                           <th>{{ __('lang.brand') }}</th>
                            <th>{{ __('lang.year') }}</th>
{{--                           <th>{{ __('lang.actions') }}</th>
 --}}                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>#</th>
                        <th>{{ __('lang.name') }}</th>
                        <th>{{ __('lang.phone') }}</th>
                        <th>{{ __('lang.brand') }}</th>
                        <th>{{ __('lang.year') }}</th>
{{--                         <th>{{ __('lang.actions') }}</th>
 --}}                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach($captins as $captin)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $captin->name }}</td>
                          <td>{{ $captin->phone }}</td>
                           <td>{{ $captin->car_brand }}</td>
                            <td>{{ $captin->year }}</td>
{{--                           <td class="text-nowrap">
                              <a href="{{ route('captins.edit', $captin->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                              <a href="javascript:void(0)" class="delete_confirmation" data-toggle="modal" data-target="#myModal" data-action="{{ route('captins.destroy', $captin->id) }}">
                                 <i class="fa fa-close text-danger"></i>
                               </a>
                          </td> --}}
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
{{--           <h6 class="text-center">{!! $captins->render() !!}</h6>
 --}}
      </div>
  </div>
</div>
@include('admin.partials.confirm_modal')
@endsection
