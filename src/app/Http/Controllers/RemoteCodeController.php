<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DashBoard;
use App\Models\RemoteCode;
use App\Models\RemoteCategory;
use GuzzleHttp\Client;

class RemoteCodeController extends Controller
{
    public function index(){
        return $this->remote(1);
    }

    /**
     * index
     * @param category_id
     * @return 
     */
    public function remote($category_id){

        //コードを取得する
        $codes = RemoteCode::where('remote_categories.id', '=', $category_id)->leftjoin('remote_categories', 'remote_codes.category_id', '=', 'remote_categories.id')
            ->select('remote_codes.id', 'remote_categories.name as category_name','remote_codes.name as code_name', 'remote_categories.filename', 'remote_codes.command')
            ->get();

        // 分類を取得する
        $categories = RemoteCategory::all();

        return view('DashBoard/remote')->with('codes', $codes)->with('categories', $categories)->with('category_id', $category_id);
    }

    /**
     * リモコン制御信号を送信する
     * @param request
     * @return 
     */
    public function send(Request $request){
        // 分類とコマンドのIDを取得する
        $category_id = $request->input('category_id');
        $command_id = $request->input('id');

        //ファイル名とコマンド名を取得する
        $remoteInfo = $this->GetRemoteInfo($category_id, $command_id);

        //WebAPI実行
        {
            //接続
            $url = "http://smarthome-server.local:20080/api/remotecontrol.php";
            $parameter = ['query' => ['filename' => $remoteInfo->filename, 'command' => $remoteInfo->command]];
            $response = (new Client())->request("GET", $url, $parameter);
            $posts = $response->getBody();
            $posts = json_decode($posts, true);
        }

        // return redirect()->action('App\Http\Controllers\DashBoardController@remote', ['category_id' => $category_id]);
        return $this->remote($category_id);
    }

    /**
     * リモコン制御信号情報をDBから取得する
     * @param request
     * @return 
     */
    public function GetRemoteInfo($category_id, $command_id){
        return RemoteCode::where('remote_categories.id', '=', $category_id)
            ->leftjoin('remote_categories', 'remote_codes.category_id', '=', 'remote_categories.id')
            ->select('remote_codes.id', 'remote_categories.name as category_name','remote_codes.name as code_name', 'remote_categories.filename', 'remote_codes.command')
            ->where('remote_codes.id', '=', $command_id)
            ->first();
    }


    // public function index(){
    //     $codes = RemoteCode::all();
    //     return view('remote/index', compact('codes'));
    // }

    // public function edit($id){
    //     $code = RemoteCode::findOrFail($id);
    //     return view('remote/edit', compact('code'));
    // }


    // public function update(Request $request, $id)
    // {
    //     $code = RemoteCode::findOrFail($id);
    //     $code->category = $request->category;
    //     $code->command = $request->command;
    //     $code->name = $request->name;
    //     $code->save();

    //     return redirect("/remote");
    // }

    // public function destroy($id)
    // {
    //     $code = RemoteCode::findOrFail($id);
    //     $code->delete();

    //     return redirect("/remote");
    // }
    
    // public function create()
    // {
    //     // 空の$RemoteCodeを渡す
    //     $code = new RemoteCode();
    //     return view('remote/create', compact('code'));
    // }

    // public function store(Request $request)
    // {
    //     $code = new RemoteCode();
    //     $code->category = $request->category;
    //     $code->command = $request->command;
    //     $code->name = $request->name;
    //     $code->save();

    //     return redirect("/remote");
    // }


    // public function categorylist($category){
    //     $codes = RemoteCode::where('category', '=', $category)->get();
    //     return view('remote/index', compact('codes'));
    // }
}
