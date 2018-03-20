<?php

return [
    'route' => [
        's3' => [
            'middleware' => [''],
            'url' => "/backtools/s3/presigned",
        ],
        'qiniu' => [
            'middleware' => [''],
            'url' => "/backtools/qiniu/presigned",
        ],
    ],
    'qiniu' => [
        'access_key' => env('QN_ACCESS_KEY', ""),
        'secret_key' => env('QN_SECRET_KEY', ""),
        'bucket'     => env('QN_BUCKET', ""),
        'domain'     => env('QN_DOMAIN', ""),
    ],
    'aws' => [
        'region' => '',
        'version' => '',
        'ua_append' => ['L5MOD/3.1.0'],
    ],
    's3' => [
        'credentials' => [
            'key'    => env('S3_KEY', ""),
            'secret' => env('S3_SECRET', ""),
        ],

        'url' => '',
        'region' => '',
        'version' => '',

        'albums' => ['/'],

        '/' => [
            'expires' => 120,
            'bucket'  => '',
            'ACL'     => 'public-read',
        ],
    ],
    'cdn' => [
        'js' => [
            'vue' => '//cdn.bootcss.com/vue/2.2.6/vue.min.js',
            'sweetalert' => '//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js',
            'axios' => '//cdn.bootcss.com/axios/0.16.1/axios.min.js',
            'upload-image' => '/js/upload-image.js',
            'uuid' => '//cdn.bootcss.com/node-uuid/1.4.8/uuid.min.js',
        ],
        'css' => [
            'sweetalert' => '//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.css',
        ],
    ],
];
