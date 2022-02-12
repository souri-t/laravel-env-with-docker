<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RemoteCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            // テーブルのクリア
            DB::table('remote_codes')->truncate();

            // 初期データ用意（列名をキーとする連想配列）
            $remotecodes = [
                ['name' => '電源', 'command' => 'bravia:power','category_id' => '1'],
                ['name' => '入力切替', 'command' => 'bravia:input_select','category_id' => '1'],
                ['name' => 'オフタイマー', 'command' => 'bravia:off_timer','category_id' => '1'],
                ['name' => '音量［＋］', 'command' => 'bravia:volume_up','category_id' => '1'],
                ['name' => '音量［−］', 'command' => 'bravia:volume_down','category_id' => '1'],
                ['name' => 'ミュート', 'command' => 'bravia:volume_off','category_id' => '1'],
                ['name' => 'チャンネル［＋］', 'command' => 'bravia:channel_up','category_id' => '1'],
                ['name' => 'チャンネル［−］', 'command' => 'bravia:channel_down','category_id' => '1'],
                ['name' => '地上波', 'command' => 'bravia:terrestrial','category_id' => '1'],
                ['name' => 'BS', 'command' => 'bravia:bs','category_id' => '1'],
                ['name' => 'CS', 'command' => 'bravia:cs','category_id' => '1'],
                ['name' => 'Ch1', 'command' => 'bravia:ch1','category_id' => '1'],
                ['name' => 'Ch2', 'command' => 'bravia:ch2','category_id' => '1'],
                ['name' => 'Ch3', 'command' => 'bravia:ch3','category_id' => '1'],
                ['name' => 'Ch4', 'command' => 'bravia:ch4','category_id' => '1'],
                ['name' => 'Ch5', 'command' => 'bravia:ch5','category_id' => '1'],
                ['name' => 'Ch6', 'command' => 'bravia:ch6','category_id' => '1'],
                ['name' => 'Ch7', 'command' => 'bravia:ch7','category_id' => '1'],
                ['name' => 'Ch8', 'command' => 'bravia:ch8','category_id' => '1'],
                ['name' => 'Ch9', 'command' => 'bravia:ch9','category_id' => '1'],
                ['name' => 'Ch10', 'command' => 'bravia:ch10','category_id' => '1'],
                ['name' => 'Ch11', 'command' => 'bravia:ch11','category_id' => '1'],
                ['name' => 'Ch12', 'command' => 'bravia:ch12','category_id' => '1'],
                ['name' => '番組表', 'command' => 'bravia:tv_guide','category_id' => '1'],
                ['name' => '決定', 'command' => 'bravia:enter','category_id' => '1'],
                ['name' => 'ホームメニュー', 'command' => 'bravia:home_menu','category_id' => '1'],
                ['name' => 'オプション', 'command' => 'bravia:option','category_id' => '1'],
                ['name' => '戻る', 'command' => 'bravia:return','category_id' => '1'],
                ['name' => '上', 'command' => 'bravia:select_top','category_id' => '1'],
                ['name' => '下', 'command' => 'bravia:select_down','category_id' => '1'],
                ['name' => '左', 'command' => 'bravia:select_left','category_id' => '1'],
                ['name' => '右', 'command' => 'bravia:select_right','category_id' => '1'],
                ['name' => '電源OFF', 'command' => 'common:power_off','category_id' => '2'],
                ['name' => '電源ON', 'command' => 'blower:power_on','category_id' => '2'],
                ['name' => '除湿', 'command' => 'dehumidification:power_on','category_id' => '2'],
                ['name' => '冷房16℃', 'command' => 'cool16:power_on','category_id' => '2'],
                ['name' => '冷房17℃', 'command' => 'cool17:power_on','category_id' => '2'],
                ['name' => '冷房18℃', 'command' => 'cool18:power_on','category_id' => '2'],
                ['name' => '冷房19℃', 'command' => 'cool19:power_on','category_id' => '2'],
                ['name' => '冷房20℃', 'command' => 'cool20:power_on','category_id' => '2'],
                ['name' => '冷房21℃', 'command' => 'cool21:power_on','category_id' => '2'],
                ['name' => '冷房22℃', 'command' => 'cool22:power_on','category_id' => '2'],
                ['name' => '冷房23℃', 'command' => 'cool23:power_on','category_id' => '2'],
                ['name' => '冷房24℃', 'command' => 'cool24:power_on','category_id' => '2'],
                ['name' => '暖房25℃', 'command' => 'warm25:power_on','category_id' => '2'],
                ['name' => '暖房26℃', 'command' => 'warm26:power_on','category_id' => '2'],
                ['name' => '暖房27℃', 'command' => 'warm27:power_on','category_id' => '2'],
                ['name' => '暖房28℃', 'command' => 'warm28:power_on','category_id' => '2'],
                ['name' => '暖房29℃', 'command' => 'warm29:power_on','category_id' => '2'],
                ['name' => '暖房30℃', 'command' => 'warm30:power_on','category_id' => '2'],
                ['name' => '暖房31℃', 'command' => 'warm31:power_on','category_id' => '2'],
                ['name' => '全灯', 'command' => 'roomlight:all_light','category_id' => '3'],
                ['name' => '消灯', 'command' => 'roomlight:extinction','category_id' => '3'],
                ['name' => 'くつろぎモード', 'command' => 'roomlight:care_taker','category_id' => '3'],
                ['name' => '読書モード', 'command' => 'roomlight:read_book','category_id' => '3'],
                ['name' => 'リラックスモード', 'command' => 'roomlight:relax','category_id' => '3'],
                ['name' => 'おやすみモード', 'command' => 'roomlight:sleep','category_id' => '3'],
                ['name' => '食事モード', 'command' => 'roomlight:dinner','category_id' => '3'],
                ['name' => '明るさ［＋］', 'command' => 'roomlight:light_up','category_id' => '3'],
                ['name' => '明るさ［−］', 'command' => 'roomlight:light_down','category_id' => '3'],
                ['name' => '暖色［＋］', 'command' => 'roomlight:warm_up','category_id' => '3'],
                ['name' => '白色［＋］', 'command' => 'roomlight:white_up','category_id' => '3'],
                ['name' => 'メモリー点灯', 'command' => 'roomlight:memory_power','category_id' => '3'],
                ['name' => 'メモリー設定', 'command' => 'roomlight:memory_set','category_id' => '3'],
                ['name' => 'タイマー', 'command' => 'roomlight:power_timer','category_id' => '3'],
                ['name' => '電源', 'command' => 'power','category_id' => '4'],
                ['name' => '風量［＋］', 'command' => 'up','category_id' => '4'],
                ['name' => '風量［−］', 'command' => 'down','category_id' => '4'],
                ['name' => '左右首振り', 'command' => 'move_horizontal','category_id' => '4'],
                ['name' => '上下首振り', 'command' => 'move_vertical','category_id' => '4'],
                ['name' => '1時間後電源OFF', 'command' => 'offtimer_1hour','category_id' => '4'],
                ['name' => '2時間後電源OFF', 'command' => 'offtimer_2hour','category_id' => '4'],
                ['name' => '4時間後電源OFF', 'command' => 'offtimer_4hour','category_id' => '4'],
                ['name' => 'リズム風', 'command' => 'rhythm','category_id' => '4'],
                ['name' => '電源ON', 'command' => 'amp:power_on','category_id' => '5'],
                ['name' => '電源OFF', 'command' => 'amp:power_off','category_id' => '5'],
                ['name' => '音量［＋］', 'command' => 'amp:volume_up','category_id' => '5'],
                ['name' => '音量［−］', 'command' => 'amp:volume_down','category_id' => '5'],
            ];

            // 登録
            foreach($remotecodes as $remotecode) {
                \App\Models\RemoteCode::create($remotecode);
            }
        }
        {
            // テーブルのクリア
            DB::table('remote_categories')->truncate();

            // 初期データ用意（列名をキーとする連想配列）
            $categories = [
                ['id' => '1','name' => 'TV','filename' => 'codes_bravia'],
                ['id' => '2','name' => 'エアコン','filename' => 'codes_aircon'],
                ['id' => '3','name' => 'ルームライト','filename' => 'codes_roomlight'],
                ['id' => '4','name' => 'サーキュレーター','filename' => 'codes_circulator'],
                ['id' => '5','name' => 'アンプ','filename' => 'codes_amp'],
            ];

            // 登録
            foreach($categories as $category) {
                \App\Models\RemoteCategory::create($category);
            }
        }
    }
}
