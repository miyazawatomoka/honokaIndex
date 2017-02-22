<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ttmail;
class TtmailHistory extends Model {
  public function ttmail() {
    return $this->belongsTo(Ttmail);
  }
  protected $fillable = ['ttmail_id', 'visited_ip'];
}
