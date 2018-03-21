<?php

namespace TongLei\BackTools\App\Http\Controllers;

use TongLei\BackTools\App\Http\Requests\AWSRequest;

class AWSController extends Controller
{
    public function presigned(AWSRequest $request)
    {
        return $this->responseItem(s3_presigned(
            $request->get('album'),
            $request->get('filename'),
            $request->get('filetype')
        ));
    }
}
