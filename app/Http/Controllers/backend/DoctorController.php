<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\ScheduleDay;
use App\Models\Service;
use DateTime;

class DoctorController extends Controller
{
  public function index($id)
  {
    $service = Service::find($id);

    $doctors = $service->doctors;

    foreach ($doctors as $doctor) {
      $weekdays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
      foreach ($weekdays as $weekday) {
        if ($doctor[$weekday] != null) {
          $scheduleDay = ScheduleDay::find($doctor[$weekday]);
          $doctor[$weekday] = $scheduleDay->start . '-' . $scheduleDay->end;
        } else {
          $doctor[$weekday] = 'Выходной';
        }
      }
    }

    return view('content.doctors', ['doctors' => $doctors, 'service_id' => $id]);
  }

  public function personal($id)
  {
    $doctors = Doctor::where('hospital_id', $id)->get();
    $hospital = Hospital::find($id);
    return view('content.personal', ['doctors' => $doctors, 'hospital' => $hospital]);
  }

  public function person($id)
  {
    $doctor = Doctor::find($id);
    return view('content.person', ['doctor' => $doctor]);
  }

  public function show($id)
  {
    $doctor = Doctor::with('services', 'user')->find($id);

    $weekdays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

    $service_id = $_GET['service_id'];

    $day_array = [];
    $i = 0;

    foreach ($weekdays as $weekday) {
      $i++;

      $doctor[$weekday . 'c'] = $this->nearestDay($weekday);

      if (isset($doctor[$weekday])) {
        $scheduleDay = ScheduleDay::find($doctor[$weekday]);

        $doctor[$weekday] = [
          'start' => $scheduleDay->start,
          'end' => $scheduleDay->end,
        ];
        if ($i == 7) {
          $day_array[] = 0;
        } else {
          $day_array[] = $i;
        }
      }
    }

    return view('content.doctor', ['doctor' => $doctor, 'service_id' => $service_id, 'day_array' => $day_array]);
  }

  function nearestDay($targetWeekdayName)
  {
    $currentDate = new DateTime();

    // Get the current weekday name in lowercase
    $currentWeekdayName = strtolower($currentDate->format('l'));

    // Calculate the difference in days to the target weekday
    $daysToAdd = (7 + (date('N', strtotime($targetWeekdayName)) - date('N', strtotime($currentWeekdayName)))) % 7;

    // Add the calculated days to the current date to find the nearest occurrence of the target weekday
    $currentDate->modify("+$daysToAdd days");

    // Format the nearest date as a string
    $nearestDate = $currentDate->format('Y-m-d');

    return $nearestDate;
  }
}
