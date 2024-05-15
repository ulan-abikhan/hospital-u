<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Record;
use App\Models\RecordInfo;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  function show()
  {
    $records = Record::orderBy('created_at', 'desc')->get();
    foreach ($records as $record) {
      $client = User::find($record->client_id);
      $record->client_name = $client->name;
      $doctor = Doctor::find($record->doctor_id);
      $record->doctor_name = $doctor->name;
      $service = Service::find($record->service_id);
      $record->service_name = $service->name;
    }
    return view('content.admin', ['records' => $records]);
  }

  function index($id)
  {
    return view('content.record-info', ['recordId' => $id]);
  }

  function store(Request $request, $id)
  {
    $record = Record::find($id);
    $record->checked = true;
    $record->save();
    RecordInfo::create([
      'record_id' => $id,
      'diagnose' => $request->input('diagnose'),
      'note' => $request->input('note'),
    ]);

    return redirect()->route('admin');
  }
}
