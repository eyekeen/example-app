<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function __construct() {
        $this->middleware('throttle:api');
    }
    public function __invoke()
    {
        return response('test', 200, [
            'foo' => 'bar',
        ]);
    }
}
