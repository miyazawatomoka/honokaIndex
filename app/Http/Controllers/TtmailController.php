<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ttmail;
use App\TtmailHistory;
use Image;
use Config;
class TtmailController extends Controller {

  public function mailReaded(Request $request, $ttmailId) {
    $params = ['ttmail_id' => $ttmailId, 'visited_ip' => $request->ip() ];
    TtmailHistory::create($params);
    $img = Image::canvas(1, 1, '#fff');
    return $img->response('png');
  }

  public function listMails(Request $request) {
    $uname = $request->input('uname');
    $mailList = Ttmail::where('uname', $uname)->get();
    $historyList = TtmailHistory::whereIn('ttmail_id', $mailList->pluck('id'))->get();
    return view('ttmail.mailList')->with([
      'mailList' => $mailList, 'historyList' => $historyList
    ]);
  }

  public function index() {
    return view('ttmail.index');
  }

  public function createTtmail(Request $request) {
    $ttmail = Ttmail::create($request->all());
    //hardcode
    $img = '<img src="http://'.Config::get('app.domain').'/ttmail/track/'.$ttmail->id.'">';
    return view('ttmail.index')->with([
      'img' => $img, 'mail_address' => $ttmail->mail_address, 'uname' => $ttmail->uname
    ]);
  }
}
