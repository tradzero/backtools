<?php

namespace TongLei\BackTools\App\Http\Controllers;

use TongLei\BackTools\App\Http\Requests\AWSRequest;

class QiniuController extends Controller
{
    public function presigned()
    {
        return $this->responseItem(qiniu_presigned());
    }
}
