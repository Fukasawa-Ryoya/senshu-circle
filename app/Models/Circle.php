<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model {
    //テーブル名
    protected $table = 'circles';

    protected $fillable = [
        'name',
        'image',
        'content',
        'date',
        'place',
        'people',
        'twitter',
        'instagram',
        'category',
        'type',
        'authorization',
    ];

    public function image() {
        return $this->hasOne('App\Models\Image');
    }
}
