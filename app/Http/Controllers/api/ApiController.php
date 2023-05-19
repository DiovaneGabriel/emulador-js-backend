<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller {
    protected static function return_json($content, $status = 'success') {

        $data = [];
        $data['content'] = $content;
        $data['status'] = $status;

        return Response()->json($content);
    }
}
