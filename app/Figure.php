<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model {
    protected $fillable = ['chinese_name', 'english_name', 'japanese_name', 'avatar', 'status'];
    public const StatusEnum = ["invalid" => 0, "valid" => 1];
}
