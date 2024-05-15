<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\News;

class NewsController extends Controller
{
  public function index($id)
  {
    $news = News::where('hospital_id', $id)->get();
    $hospital = Hospital::find($id);

    return view('content.news', ['news' => $news, 'hospital' => $hospital]);
  }

  public function show(string $id)
  {
    $news = News::find($id);

    return view('content.one-new', ['news' => $news]);
  }
}
