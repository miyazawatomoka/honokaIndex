<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TsuinteruController extends Controller {
    public function getTsuinteruProbability(Request $request) {
       $file = $request->picture;
       $allowed_extensions = ["png", "jpg", "gif", "jpeg"];
       if (!$file || !$file->getClientOriginalExtension() || !in_array(strtolower($file->getClientOriginalExtension()), $allowed_extensions)) {
         return ['error' => 'You may only upload png, jpg or gif.'];
       }
       $url = 'http://16e45m9823.imwork.net:37065';
       $cFile = curl_file_create($file);
       $post = array('file'=> $cFile);
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL,$url);
       curl_setopt($ch, CURLOPT_POST,1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       $result = curl_exec ($ch);
       curl_close ($ch);
       $out =  json_decode($result,true);
       return response()->json($out);
    }
}
