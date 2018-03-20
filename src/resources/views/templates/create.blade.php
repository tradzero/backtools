@extends('backtools.master')

@section('page_title')
    {{ isset($model) ? 'title_placeholder 编辑' : 'title_placeholder 创建' }}
@endsection
@section('title')
    {{ isset($model) ? 'title_placeholder 编辑' : 'title_placeholder 创建' }}
@endsection
@section('subtitle')@endsection

@section('content')
<div class="wrapper" id="app">
    <div class="row">
    </div>
</div>
@endsection
