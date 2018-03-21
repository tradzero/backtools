<?php

Route::get(config('backtool.route.s3.url'),
    'TongLei\BackTools\App\Http\Controllers\AWSController@presigned')
    ->name('backtool.s3.presigned');

Route::get(
    config('backtool.route.qiniu.url'),
    'TongLei\BackTools\App\Http\Controllers\QiniuController@presigned')
    ->name('backtool.qiniu.presigned');
