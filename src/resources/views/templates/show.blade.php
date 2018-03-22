@extends('backtools.master')

@section('page_title') title_placeholder 详情 @endsection
@section('title') title_placeholder 详情 @endsection
@section('subtitle') title_placeholder 详情 @endsection

@section('style')
<link rel="stylesheet" href="{{ config('cdn.css.sweetalert') }}">
@endsection

@section('content')
<div class="wrapper" id="app">
    <div class="row">
        <div class="panel">
            <header class="panel-heading head-border">
                title_placeholder 详情
                <span class="tools pull-right">
                    <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body"></div>
        </div>
    </div>
</div>
@endsection
