<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $hospitals = Hospital::orderBy('id', 'desc')->get();

    return view('content.hospitals', ['hospitals' => $hospitals]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  public function zozh()
  {
    return view('content.zozh');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $hospital = Hospital::find($id);

    return view('content.hospital', ['hospital' => $hospital]);
  }

  public function info(string $id)
  {
    $hospital = Hospital::find($id);
    if ($id == 1) {
      $coordinates = [42.34161366841619, 69.60150044289175];
    } elseif ($id == 2) {
      $coordinates = [42.34487271679956, 69.60313787874557];
    } else {
      $coordinates = [42.335244693621355, 69.60020043329799];
    }

    return view('content.hospital-info', ['hospital' => $hospital, 'coordinates' => $coordinates]);
  }
  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
