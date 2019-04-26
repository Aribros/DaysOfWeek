<?php

function DaysOfWeek($T, $Z){
  $days = [
      "Mon" => 0,
      "Tue" => 1,
      "Wed" => 2,
      "Thu" => 3,
      "Fri" => 4,
      "Sat" => 5,
      "Sun" => 6
  ];

  $daysInWeek = 7; //total days in a week

  $selectedDay = !empty( $days[$T] ) 
                  ? $days[$T] 
                  :die("Invalid day of the week supplied.") ;

  $totalDays = (  $selectedDay + $Z ) % $daysInWeek;

  return array_flip($days)[$totalDays];
}