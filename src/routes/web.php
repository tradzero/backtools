<?php

Route::get(
    config('backtool.route.s3.url'),
    'TongLei\BackTools\App\Http\Controllers\AWSController@presigned')
    ->middleware(config('backtool.route.s3.middleware'))
    ->name('backtool.s3.presigned');

Route::get(
    config('backtool.route.qiniu.url'),
    'TongLei\BackTools\App\Http\Controllers\QiniuController@presigned')
    ->middleware(config('backtool.route.qiniu.middleware'))
    ->name('backtool.qiniu.presigned');;
