<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function task()
    {
        return view('tasks');
    }
    public function taskpost(Request $request)
    {
        echo 1;
        // $name = $request->input('name');
        // echo $name;
    }
}