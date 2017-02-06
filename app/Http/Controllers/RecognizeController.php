<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecognizeController extends Controller {
    public function index() {
      return view('recognize');
    }
}
