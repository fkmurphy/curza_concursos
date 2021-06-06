<?php

namespace App\Http\Controllers;

class EnrrollmentsController extends Controller
{
    public function get(Request $request)
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                ]
            ],
        ]);
    }
}
