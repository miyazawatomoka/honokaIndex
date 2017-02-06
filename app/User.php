<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatar() {
      $avatarPath = 'avatar/'.$this->avatar;
      if (Storage::exists($avatarPath)) {
        $url = Storage::url($avatarPath);
      }
      else {
        $url = Storage::url('avatar/normal.jpeg');
      }
      return $url;
    }
}
