<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase {
  /*
    test by seed data. Storage by local;
    'honoka@honoka.cc' avatar is '1.jpeg';
  */
    public function testUserAvatar() {
      $this->User = App\User::class;
      $user = $this->User::where(['email'=>'honoka@honoka.cc'])->first();
      $this->assertTrue($user->getAvatar() == '/storage/avatar/normal.jpeg');
    }
}
