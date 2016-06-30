<?php

namespace HomokaIndex\Http\Controllers;

use Illuminate\Http\Request;

use HomokaIndex\Http\Requests;

class DevController extends Controller
{
    public function devPage() {
        return view('devPage');
    }
}
