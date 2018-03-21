<?php

namespace TongLei\BackTools\App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use TongLei\BackTools\App\Http\Requests\AWSRequest;

class Controller extends BaseController
{
    /**
     * 数据返回格式
     */
    public function responseItem($item)
    {
        $data = [];
        $data['code'] = 0;
        $data['errmsg'] = '';
        $data['data'] = $item;

        return response()->json($data);
    }
}
