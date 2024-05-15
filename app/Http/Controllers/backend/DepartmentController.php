<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Hospital;
use App\Models\Service;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index($id)
  {
    $departments = Department::where('hospital_id', $id)->get();
    $hospital = Hospital::find($id);

    return view('content.departments', ['departments' => $departments, 'hospital' => $hospital]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    if ($request->user()->role != 'admin') {
      return response(['message' => 'No permission'], 403);
    }

    $request->validate([
      'name' => 'required|string',
    ]);

    Department::create([
      'name' => $request['name'],
    ]);

    return response(status: 201);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $department = Department::find($id);

    return view('content.department', ['department' => $department]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
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
