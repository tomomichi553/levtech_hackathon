<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class IndustrySeeder extends Seeder
{
   
    public function run()
    {
       DB::table('industries')->insert([
            'name' => 'メーカー(食品・農林・水産)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(建設・住宅・インテリア)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(繊維・化学・薬品・化粧品)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(鉄鋼・金属・鉱業)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(機械・プラント)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(電子・電気機器)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(自動車・輸送用機器)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(精密・医療機器)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(印刷・事務機器関連)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(スポーツ・玩具)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'メーカー(その他メーカー)',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '総合商社',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '専門商社',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '百貨店・スーパー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'コンビニ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '専門店',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '銀行',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'クレジット',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '信販・リース',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '生保・損保',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '不動産',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '鉄道・航空・運輸・物流',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '電力・ガス・エネルギー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'フードサービス',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'ホテル・旅行',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '医療・福祉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'アミューズメント・レジャー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'コンサルティング・調査',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '人材',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '教育',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'ソフトウェア',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => 'インターネット',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '通信',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '放送',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '新聞',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '出版',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '広告',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '公社・団体',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('industries')->insert([
            'name' => '官公庁',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
