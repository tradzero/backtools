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
