<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashBoard;
use App\Models\RemoteCode;
use App\Models\RemoteCategory;
use GuzzleHttp\Client;

class DashBoardController extends Controller
{
    /**
     * index
     * @return 
     */
    public function index(){
        return view('DashBoard/index');
    }

    public function test(){
        return view('DashBoard/test');
    }

}
