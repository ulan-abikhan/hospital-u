<?php

namespace App\Http\Controllers\backend;

use App\Helpers\TimeHelper;
use App\Http\Controllers\Controller;
use App\Mail\RecordMail;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Record;
use App\Models\ScheduleDay;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ScheduleController extends Controller
{
  public function show($doctorId, $day, Request $request)
  {
    $weekdays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    $date = TimeHelper::getNearestDateByWeekday(array_search($day, $weekdays));

    $doctor = Doctor::find($doctorId);

    $scheduleDay = ScheduleDay::find($doctor[$day]);

    $existingAppointments = Record::where('doctor_id', $doctorId)
      ->where('date', $date)
      ->pluck('start', 'end')
      ->toArray();

    $startTime = Carbon::createFromTimeString($scheduleDay->start);
    $endTime = Carbon::createFromTimeString($scheduleDay->end);
    $interval = CarbonInterval::minutes(15);
    $timeSlots = [];

    $currentTime = clone $startTime;
    while ($currentTime < $endTime) {
      $slotStartTime = $currentTime->toTimeString();
      $currentTime->addMinutes(15);
      $slotEndTime = $currentTime->toTimeString();

      if (!isset($existingAppointments[$slotEndTime])) {
        $timeSlots[] = [
          'from' => $slotStartTime,
          'to' => $slotEndTime,
          'name' => '',
          'is_available' => true,
        ];
      } else {
        $current = Record::where('doctor_id', $doctorId)
          ->where('date', $date)
          ->where('start', $slotStartTime)
          ->first();

        $user = User::find($current->client_id);
        $timeSlots[] = [
          'from' => $slotStartTime,
          'to' => $slotEndTime,
          'name' => $user->name,
          'is_available' => false,
        ];
      }
    }

    return view('content.schedule', [
      'timeSlots' => $timeSlots,
      'date' => $date,
      'doctorId' => $doctorId,
      'service_id' => $request->service_id,
    ]);
  }

  public function showByDate($doctorId, $date, Request $request)
  {
    $dateC = Carbon::parse($date);
    $weekday = strtolower($dateC->format('l'));

    $doctor = Doctor::find($doctorId);

    $scheduleDay = ScheduleDay::find($doctor[$weekday]);

    $existingAppointments = Record::where('doctor_id', $doctorId)
      ->where('date', $date)
      ->pluck('start', 'end')
      ->toArray();

    $startTime = Carbon::createFromTimeString($scheduleDay->start);
    $endTime = Carbon::createFromTimeString($scheduleDay->end);
    $interval = CarbonInterval::minutes(15);
    $timeSlots = [];

    $currentTime = clone $startTime;
    while ($currentTime < $endTime) {
      $slotStartTime = $currentTime->toTimeString();
      $currentTime->addMinutes(15);
      $slotEndTime = $currentTime->toTimeString();

      if (!isset($existingAppointments[$slotEndTime])) {
        $timeSlots[] = [
          'from' => $slotStartTime,
          'to' => $slotEndTime,
          'name' => '',
          'is_available' => true,
        ];
      } else {
        $current = Record::where('doctor_id', $doctorId)
          ->where('date', $date)
          ->where('start', $slotStartTime)
          ->first();

        $user = User::find($current->client_id);
        $timeSlots[] = [
          'from' => $slotStartTime,
          'to' => $slotEndTime,
          'name' => $user->name,
          'is_available' => false,
        ];
      }
    }

    return view('content.schedule', [
      'timeSlots' => $timeSlots,
      'date' => $date,
      'doctorId' => $doctorId,
      'service_id' => $request->service_id,
    ]);
  }

  public function index()
  {
    $user_id = auth()->user()->id;

    $records = Record::where('client_id', $user_id)->get();

    foreach ($records as $record) {
      $doctor = Doctor::find($record->doctor_id);
      $service = Service::find($record->service_id);
      $record->doctor = $doctor->name;
      $record->client = User::find($record->client_id)->name;
      $record->department = $service->name;
    }

    return view('content.records', ['records' => $records]);
  }

  public function store(Request $request)
  {
    Record::create([
      'client_id' => $request->client_id,
      'doctor_id' => $request->doctor_id,
      'service_id' => $request->service_id,
      'date' => $request->date,
      'start' => $request->from,
      'end' => $request->to,
    ]);

    $doctor = Doctor::find($request->doctor_id);
    $service = Service::find($request->service_id);

    Mail::to($request->user()->email)->send(
      new RecordMail($request->user(), $service, $doctor, $request->date, $request->from)
    );
  }
}
