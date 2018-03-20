@extends('backtools.master')

@section('page_title') title_placeholder 列表 @endsection
@section('title') title_placeholder 列表 @endsection
@section('subtitle') title_placeholder 列表 @endsection

@section('style')
<link rel="stylesheet" href="{{ config('cdn.css.sweetalert') }}">
@endsection

@section('content')
<div class="wrapper" id="app">
    <div class="row">
        <div class="panel">
            <div class="panel-body">
                <div class="form-group">
                    <a href="">
                        <button class="btn btn-info"> title_placeholder 创建</button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>序号</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($models as $model)
                            <tr>
                                <td>{{ $model->id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="foot-border">
                    <div class="pull-left">
                        <span class="form-control"
                            style="margin: 20px 0;border: none;">
                            共{{ $models->total() }}条数据</span>
                    </div>
                    <div class="pull-right">
                        {{ $models->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script src="{{ config('backtool.cdn.js.vue') }}"></script>
<script src="{{ config('backtool.cdn.js.axios') }}"></script>
<script src="{{ config('backtool.cdn.js.sweetalert') }}"></script>
<script>
    var vm = new Vue({}).$mount('#app');
</script>
@endsection
