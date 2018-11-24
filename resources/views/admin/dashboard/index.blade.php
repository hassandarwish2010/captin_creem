@extends('admin.layouts.layout')

@section('title', __('lang.dashboard'))

@section('js')
<script>
$(document).ready(function() {
    $.toast({
        heading: 'مرحبا بك فى Emirates',
        text: 'يمكنك التحكم فى الموقع بالكامل من هنا',
        position: 'top-right',
        loaderBg: '#FF0000',
        icon: 'info',
        hideAfter: 3500,
        stack: 6
    })
});
</script>
@endsection

@section('content')

@endsection
