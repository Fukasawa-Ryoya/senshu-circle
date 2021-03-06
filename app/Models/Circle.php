<?php

namespace App\Models;

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
        'male',
        'female',
        'twitter',
        'instagram',
        'link',
        'category',
        'type',
        'authorization',
    ];

    public function image() {
        return $this->hasOne('App\Models\Image');
    }
}
