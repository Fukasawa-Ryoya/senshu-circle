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
            'name' => 'テニスサークル',
            'image' => 'テニス.jpg',

            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem aspernatur quibusdam
            magnam dolor
            explicabo, nihil quaerat sequi necessitatibus est perferendis, molestias veritatis esse. Reiciendis cumque rem
            dolores
            sequi consectetur.',
            'date' => '毎週火・木',
            'place' => 'ドラゴンパーク',
            'people' => '30',
            'male'=>'50',
            'female'=>'50',
            'twitter' => 'twitter',
            'instagram' => 'instagram',
            'link'=>'link',
            'category' => 'スポーツ',
            'type' =>'テニス',
            'authorization'=>'true'
        ]);
        DB::table('circles')->insert([
            'name' => 'サッカーサークル２',
            'image' => 'サッカー2.jpg',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem aspernatur quibusdam
            magnam dolor
            explicabo, nihil quaerat sequi necessitatibus est perferendis, molestias veritatis esse. Reiciendis cumque rem
            dolores
            sequi consectetur.',
            'date' => '毎週火・木',
            'place' => 'ドラゴンパーク',
            'people' => '60',
            'male'=>'50',
            'female'=>'50',
            'twitter' => 'twitter',
            'instagram' => 'null',
            'link'=>'link',
            'category' => 'スポーツ',
            'type' =>'サッカー',
            'authorization'=>''
        ]);
        DB::table('circles')->insert([
            'name' => 'サークル名',
            'image' => 'サークル.jpg',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem aspernatur quibusdam
            magnam dolor
            explicabo, nihil quaerat sequi necessitatibus est perferendis, molestias veritatis esse. Reiciendis cumque rem
            dolores
            sequi consectetur.',
            'date' => '毎週火・木',
            'place' => 'ドラゴンパーク',
            'people' => '60',
            'male'=>'50',
            'female'=>'50',
            'twitter' => 'twitter',
            'instagram' => 'instagram',
            'link'=>'link',
            'category' => 'サークル',
            'type' =>'サークル',
            'authorization'=>''

        ]);
        DB::table('circles')->insert([
            'name' => 'サークル名',
            'image' => 'サークル.jpg',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem aspernatur quibusdam
            magnam dolor
            explicabo, nihil quaerat sequi necessitatibus est perferendis, molestias veritatis esse. Reiciendis cumque rem
            dolores
            sequi consectetur.',
            'date' => '毎週火・木',
            'place' => 'ドラゴンパーク',
            'people' => '60',
            'male'=>'50',
            'female'=>'50',
            'twitter' => 'twitter',
            'instagram' => 'instagram',
            'link'=>'link',
            'category' => 'サークル',
            'type' =>'サークル',
            'authorization'=>''
        ]);
    }
}
