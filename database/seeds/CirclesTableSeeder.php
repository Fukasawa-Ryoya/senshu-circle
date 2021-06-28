<?php

use App\models\Circle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CirclesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('circles')->insert([
            'name' => 'オレンジ',
            'image' => 'オレンジ.jpg',
            'content' => 'バドミントンサークルです！未経験者の人ももちろん沢山います。なので初心者の方もみんなが楽しめるサークルです！初心者と経験者で一緒に楽しく、また経験者同士で真剣勝負など、色んな形でバドミントンを楽しむことができます(^_^)
            1年に3回の合宿、夏にBBQ、秋に学祭の出店など、沢山の行事があります♫
            大規模サークルなので、男女や先輩後輩関係なく仲良くできるので、友達が沢山できます！
            一緒に大学生活を送りましょう(^○^)',
            'date' => '週に2回（木、金）',
            'place' => '新百合ヶ丘駅　麻生小学校',
            'people' => '130',
            'male'=>'65',
            'female'=>'65',
            'twitter' => 'https://twitter.com/OrangeSenshu',
            'instagram' => 'https://www.instagram.com/senshu_orange_bad',
            'link'=>'',
            'category' => 'スポーツ',
            'type' =>'バドミントン',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => 'Senshu Dance Crew(SD-C)',
            'image' => 'Senshu Dance Crew(SD-C).jpg',
            'content' => 'ダンス(HIPHOP / Jazz / HOUSE / BREAK / POP / KRUMP / JAZZ HIPHOP / R&B / Free Style)',
            'date' => '毎週決まった曜日に練習があるわけではありません。各イベントの約1ヶ月前頃から、どのナンバーも練習が始まります！詳しい日程はナンバーごとに決めていきます！大体1つのナンバーで6.7回になると思います。',
            'place' => '生田キャンパス、新宿や渋谷のスタジオ等',
            'people' => '140',
            'male'=>'60',
            'female'=>'80',
            'twitter' => 'https://twitter.com/oideyo_sdc',
            'instagram' => 'https://www.instagram.com/sdcgallery',
            'link'=>'',
            'category' => 'スポーツ',
            'type' =>'ダンス',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => 'Senshu Practical Airsoft Circle (SPAC)',
            'image' => 'Senshu Practical Airsoft Circle (SPAC).jpg',
            'content' => '主に専修大学のメンバーを中心に、月に1~2回のサバイバルゲーム参加を行っています。',
            'date' => '月に1〜2回',
            'place' => '関東一帯のサバイバルゲームフィールド',
            'people' => '14',
            'male'=>'13',
            'female'=>'1',
            'twitter' => 'https://twitter.com/sabage_senshu',
            'instagram' => 'https://www.instagram.com/spac_airsoft',
            'link'=>'link',
            'category' => 'その他',
            'type' =>'サバイバルゲーム',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => 'Glee 専修フットサルサークル',
            'image' => 'Glee 専修フットサルサークル.jpg',
            'content' => 'コートレンタルしてフットサル、サークル内で仲間を見つけて個サル参加',
            'date' => '週1程度(不定期)',
            'place' => "主に多摩川球's倶楽部(登戸)、フットサラ町田など…",
            'people' => '6',
            'male'=>'6',
            'female'=>'0',
            'twitter' => 'https://twitter.com/glee_su2021',
            'instagram' => 'https://www.instagram.com/glee_futsal_circle',
            'link'=>'',
            'category' => 'スポーツ',
            'type' =>'フットサル',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => '男子ラクロス愛好会',
            'image' => '男子ラクロス愛好会.jpg',
            'content' => 'リーグ戦での勝利に向けて日々練習中',
            'date' => '日月水木土（平日7-9,土日8-11）',
            'place' => '菅多目的広場（矢野口駅近く）',
            'people' => '28',
            'male'=>'25',
            'female'=>'3',
            'twitter' => 'https://twitter.com/senshulaxfresh',
            'instagram' => 'https://www.instagram.com/senshulax_fresh',
            'link'=>'',
            'category' => 'スポーツ',
            'type' =>'ラクロス',
            'authorization'=>'true'
        ]);
        DB::table('circles')->insert([
            'name' => 'SDF(専修大学ディズニーサークル)',
            'image' => '画像なし.jpg',
            'content' => '映画鑑賞、TDR訪問、花火 etc',
            'date' => '不定期',
            'place' => 'オンライン 生田キャンパス TDR',
            'people' => '13',
            'male'=>'7',
            'female'=>'6',
            'twitter' => 'https://twitter.com/disney_senshu',
            'instagram' => 'https://www.instagram.com/sdf_senshu',
            'link'=>'',
            'category' => 'その他',
            'type' =>'ディズニー',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => '該当サークルなし',
            'image' => '画像なし.jpg',
            'content' => 'なし',
            'date' => 'なし',
            'place' => 'なし',
            'people' => '0',
            'male'=>'0',
            'female'=>'0',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'link'=>'',
            'category' => '文化・芸術',
            'type' =>'',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => '該当サークルなし',
            'image' => '画像なし.jpg',
            'content' => 'なし',
            'date' => 'なし',
            'place' => 'なし',
            'people' => '0',
            'male'=>'0',
            'female'=>'0',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'link'=>'',
            'category' => '学問',
            'type' =>'',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => '該当サークルなし',
            'image' => '画像なし.jpg',
            'content' => 'なし',
            'date' => 'なし',
            'place' => 'なし',
            'people' => '0',
            'male'=>'0',
            'female'=>'0',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'link'=>'',
            'category' => '国際交流・ボランティア',
            'type' =>'',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => 'RUSH',
            'image' => 'RUSH.jpg',
            'content' => 'バスケ、飲み会、観光、メリハリのある人気のサークルです!
            合宿、イベント盛りだくさんです! 先輩後輩関係なく仲のいいサークルです！初心者大歓迎、バスケしたい人大募集!',
            'date' => '日曜日19時〜21時',
            'place' => '菅生中学校',
            'people' => '121',
            'male'=>'85',
            'female'=>'36',
            'twitter' => 'https://twitter.com/rush_3712',
            'instagram' => 'https://www.instagram.com/senshu_rush',
            'link'=>'',
            'category' => 'スポーツ',
            'type' =>'バスケットボール',
            'authorization'=>''
        ]);
        // DB::table('circles')->insert([
        //     'name' => '',
        //     'image' => '.jpg',
        //     'content' => '',
        //     'date' => '',
        //     'place' => '',
        //     'people' => '',
        //     'male'=>'',
        //     'female'=>'',
        //     'twitter' => 'https://twitter.com/',
        //     'instagram' => 'https://www.instagram.com/',
        //     'link'=>'',
        //     'category' => '',
        //     'type' =>'',
        //     'authorization'=>''
        // ]);
    }
}
