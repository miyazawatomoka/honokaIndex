<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TtmailHistory;
class Ttmail extends Model {
  public function ttmailHistories() {
     return $this->hasMany(TtmailHistory);
  }
  protected $fillable = ['mail_address', 'uname'];
}
