@extends('backtools.master')

@section('page_title')
    {{ $model ? 'title_placeholder 编辑' : 'title_placeholder 创建' }}
@endsection
@section('title')
    {{ $model ? 'title_placeholder 编辑' : 'title_placeholder 创建' }}
@endsection
@section('subtitle')@endsection

@section('content')
<div class="wrapper" id="app">
    <div class="row">
        <form method="POST" action="{{ $model
            ? route('dashboard.models.update', $model->id)
            : route('dashboard.models.store') }}">
            <div class="panel">
                <header class="panel-heading head-border">
                    {{ $model ? 'title_placeholder 编辑' : 'title_placeholder 创建' }}
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label"></label>
                        <input
                            type="text"
                            name="question"
                            class="form-control"
                            placeholder=""
                            value="">
                    </div>
                </div>
            </div>
            <div class="panel">
                <header class="panel-heading head-border">操作</header>
                <div class="panel-body">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            {{ $model ? '更新' : '创建' }}
                        </button>
                    </div>
                </div>
            </div>
            {{ csrf_field() }}
            {{ method_field( $model ? 'PATCH' : 'POST') }}
        </form>
    </div>
</div>
@endsection
