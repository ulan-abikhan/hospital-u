<?php

namespace App\Helpers;

use Carbon\Carbon;
use DateTime;

class TimeHelper
{

    public static function createDateRangeArray($start, $end): array
    {
        $startDate = Carbon::parse($start);
        $endDate = Carbon::parse($end);
        $dates = [];

        while ($startDate->lte($endDate)) {
            $date = $startDate->copy();
            $dates[] = [
                'date' => $date->toDateString(),
                'day'=> $date->format('d.m.y'),
                'weekday' => strtolower($date->englishDayOfWeek)
            ];
            $startDate->addDay();
        }

        return $dates;
    }

    public static function getDays(int $w) {
      $start = Carbon::now();

      $end = Carbon::now()->addMonths(1);

      $weekday = $w;

      $dates = [];

      $currentDate = $start->copy();
      while ($currentDate->lessThanOrEqualTo($end)) {
        if ($currentDate->dayOfWeek == $weekday) {
          $dates[] = $currentDate->format('Y-m-d');
        }
        $currentDate->addDay();
      }

      return $dates;
    }

  static function getNearestDateByWeekday($weekday) {
    $today = new DateTime();

    $todayWeekday = $today->format('N'); // Get the numeric representation of the current day (1 for Monday, 7 for Sunday)
    $daysToAdd = $weekday - $todayWeekday; // Calculate the difference in days to get to the specified weekday

    if ($daysToAdd < 0) {
      $daysToAdd += 7; // If the specified weekday has already passed in the current week, add 7 days to find the next occurrence
    }

    $nearestDate = $today->modify("+$daysToAdd days")->format('Y-m-d');

    return $nearestDate;
  }


    public static function calculateHourCount(Carbon $start, Carbon $end, $givenTime) : int {

        $given = Carbon::parse($givenTime);

        $differenceInMinutes = $end->diffInMinutes($given);

        $time = $differenceInMinutes / 40;

        return self::customRound($time);

    }

    private static function customRound($number) : int {
        return $number - floor($number) <= 0.5 ? floor($number) : ceil($number);
    }

}
