<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HelloResponseController extends Controller
{
    public function getResp(): Response
    {
        // return string
        // return 'Hello world';

        // return array
        // return [1, 2, 3];

        // return Response instance
        // return response('Hello world', 205)->header('Content-Type', 'text/plain');

        // return json
        return response()->json([
            'name' => 'hyoil',
            'state' => 'good',
        ]);
    }
}
