<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public $data = [];
    // public function __construct()
    // {
    //     $this->data['welcome'] = 'Hello World!';
    // }

    // public function __construct()
    //  {
    //     view()->share('welcome', 'Hello World!');
    //  }

    public function index()
    {
        return view('welcome');
    }

    public function index2()
    {
        return view('welcome2');
    }
}
