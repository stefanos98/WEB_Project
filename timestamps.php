<?php

function getdaystamps (int $day){
    $query_date = "Y-m-$day";
    //Set starting and ending time & parse datetime into UNIX datetime
    $first = date("Y-m-d 00:00:00", strtotime($query_date));
    $last = date("Y-m-d 23:59:59", strtotime($query_date));
    //Get converted datetime & *1000 from ms to sec
    $first_stamp = strtotime($first)*1000; 
    $last_stamp = strtotime($last)*1000;
    return[$first_stamp, $last_stamp];
}

function getmonthstamps (int $month){
    $query_date = "Y-$month-d";
    $first = date("Y-m-01 00:00:006", strtotime($query_date));
    $last = date ("Y-m-31 23:59:59", strtotime($query_date));
    $first_stamp = strtotime($firts)*1000;
    $last_stamp = strtotime($last)*1000;
    return[$first_stamp, $last_stamp];
}

function getyearsamps (int $year){
    $query_date = "$year-m-d";
    $first = date ("Y-01-01 00:00:00", strtotime($query_date));
    $last = date ("Y-12-31 23:59:59", strtotime($query_date));
    $first_stamp = strtotime($first)*1000;
    $last_stamp = strtotime($last)*1000;
    return [$first_stamp, $last_stamp];
}
