<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FigureImage extends Model {
  protected $fillable = ['file_name', 'user_id', 'figure_id', 'status'];
  public const StatusEnum = ["invalid" => 0, "merged" => 1, "trained" => 2];
}
