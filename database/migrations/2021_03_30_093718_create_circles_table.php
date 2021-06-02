<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirclesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('circles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->longText('content');  //活動内容
            $table->string('date');
            $table->string('place');
            $table->integer('people');  //人数
            $table->integer('male'); //男
            $table->integer('female');//女
            $table->string('twitter');  //SNSリンク
            $table->string('instagram');  //SNSリンク
            $table->string('link');//その他のリンク
            $table->string('category');  //スポーツなど
            $table->string('type');  //サッカーなど
            $table->string('authorization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('circles');
    }
}
