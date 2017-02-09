<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Figure;
use App\FigureImage;
use Illuminate\Support\Facades\Auth;
use Log;
class FigureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      if (!Auth::check()){
        return response('', 401);
      }
      if (!( $request->chineseName && $request->englishName && $request->japaneseName )) {
        return response('param not sufficient', 400);
      }
      if (Figure::where("english_name", $request->englishName)->first()) {
        return response('figure already exist', 409);
      }
      if ($request->avatar) {
        $path = Storage::disk('public')->putFile('figure/avatar', $request->file('avatar'));
        $name = explode("/",$path)[2];
      } else {
        $name = "";
      }
      $figure = Figure::create([
        'chinese_name' => $request->chineseName,
        'english_name'=> $request->englishName,
        'japanese_name' => $request->japaneseName,
        'avatar' => $name,
        'status' => Figure::StatusEnum['invalid']
      ]);
      if ($request->fileList) {
        $filenameList = explode(',', $request->fileList);
        foreach ($filenameList as $filename) {
          if (Storage::disk('public')->exists('images/'.$filename)) {
            if (!Storage::disk('public')->exists('figure/images/'.$filename)) {
              Storage::disk('public')->move('images/'.$filename, 'figure/images/'.$filename);
              FigureImage::create([
                'file_name' => $filename,
                'user_id' => Auth::User()->id,
                'user_id' => 1,
                'figure_id' => $figure->id,
                'status' => FigureImage::StatusEnum['invalid']
              ]);
            }
          }
        }
      }
      return response('succ', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
