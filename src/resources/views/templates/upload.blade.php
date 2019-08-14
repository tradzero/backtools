@extends('backtools.master')

@section('page_title')上传图片例子@endsection
@section('title')上传图片例子@endsection
@section('subtitle')@endsection

@section('content')
<div class="wrapper" id="app">
    <div class="row">
        <image-upload
            type="s3"
            album="/"
            origin-image=""
            category="test"
            placeholder="请上传封面"
            base-url="{{config('backtool.s3.url')}}"
            input-name="logo"
            presigned-url="{{route('backtool.s3.presigned')}}">
        </image-upload>
    </div>
</div>
@endsection

@include('backtools.upload')
@section('script')
<script src="{{ config('backtool.cdn.js.vue') }}"></script>
<script src="{{ config('backtool.cdn.js.axios') }}"></script>
<script src="{{ config('backtool.cdn.js.sweetalert') }}"></script>
<script src="{{ config('backtool.cdn.js.uuid') }}"></script>
<script src="{{ config('backtool.cdn.js.upload-image') }}"></script>
<script>
    new Vue({}).$mount("#app");
</script>
@endsection
