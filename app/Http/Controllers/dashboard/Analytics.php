<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Analytics extends Controller
{
  public function index()
  {
    $users = DB::table('users')->count();

    $records = DB::table('records')->count();

    $departments = DB::table('departments')
      ->where('hospital_id', 3)
      ->count();

    $doctors = DB::table('doctors')
      ->where('hospital_id', 3)
      ->count();

    $persons = Doctor::where('hospital_id', 3)->get();

    return view('content.statistics', [
      'users' => $users,
      'departments' => $departments,
      'records' => $records,
      'doctors' => $doctors,
      'persons' => $persons,
    ]);
  }
}
