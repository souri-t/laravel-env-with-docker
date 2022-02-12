<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashBoard;
use GuzzleHttp\Client;

class TranslateController extends Controller
{
    private const ACCESS_TOKEN = "1d8bcd37-d4f3-f93e-d866-093035ff2ecb:fx";

    /**
     * index
     * @return 
     */
    public function index(){
        return view('DashBoard/translate')->with('targetLangage', '')->with('sourceText', '')->with('translatedText', '');
    }

    public function translateJpEn(Request $request)
    {
        #入力されたデータを変数に代入
        $sourceText = $request->input('sourcetext');
        $targetLangage = $request->input('translateMode');

        //WebAPI実行
        {
            //接続
            $url = "https://api-free.deepl.com/v2/translate";
            $parameter = ['query' => [
                'auth_key' => self::ACCESS_TOKEN, 
                'text' => $sourceText,
                'target_lang' => $targetLangage
                // 'target_lang' => 'EN'
                ]
            ];
            $response = (new Client())->request("GET", $url, $parameter);
            $jsonResponse = json_decode($response->getBody(), true);
        
            //翻訳文章を取り出す
            $translatedText = $jsonResponse["translations"][0]["text"];

            return view('DashBoard/translate')
                ->with('targetLangage', $targetLangage)
                ->with('sourceText', $sourceText)
                ->with('translatedText', $translatedText);
        }

    }
}
