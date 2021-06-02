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
            'name' => 'サッカーサークル',
            'image' => 'サッカー.jpg',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem aspernatur quibusdam
            magnam dolor
            explicabo, nihil quaerat sequi necessitatibus est perferendis, molestias veritatis esse. Reiciendis cumque rem
            dolores
            sequi consectetur.',
            'date' => '毎週火・木',
            'place' => 'ドラゴンパーク',
            'people' => '10',
            'male'=>'50',
            'female'=>'50',
            'twitter' => 'https://www.youtube.com/watch?v=6FKFgScw13c',
            'instagram' => 'instagram',
            'link'=>'link',
            'category' => 'スポーツ',
            'type' =>'サッカー',
            'authorization'=>'true'
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
        DB::table('circles')->insert([
            'name' => 'サークル名',
            'image' => '城と顔.jpg',
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
        DB::table('circles')->insert([
            'name' => 'サークル名',
            'image' => '夕日.jpg',
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
            'image' => '夕日2.png',
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
            'authorization'=>'true'

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
            'people' => '100',
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
            'image' => '夕焼け.jpg',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quidem aspernatur quibusdam
            magnam dolor
            explicabo, nihil quaerat sequi necessitatibus est perferendis, molestias veritatis esse. Reiciendis cumque rem
            dolores
            sequi consectetur.',
            'date' => '毎週火・木',
            'place' => 'ドラゴンパーク',
            'people' => '20',
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
            'people' => '6',
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
            'people' => '10',
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
