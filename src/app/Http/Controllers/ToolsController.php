<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashBoard;

class ToolsController extends Controller
{

    public function index(){
        return view('DashBoard/tools');
    }

    public function trim(Request $request)
    {
        #入力されてデータを変数に代入
        $res = $request->input('urltext');
        
        //抽出する
        $isMatch = preg_match('/https:\/\/.*video\/.*.(?=\?)/', $res, $trimText);
        if (!$isMatch) return view('DashBoard/tools',['message' => "not match"]);

        // 取得した値をビュー「DashBoard/index」に渡す
        return view('DashBoard/tools',['message' => $trimText[0]]);
    }

}
