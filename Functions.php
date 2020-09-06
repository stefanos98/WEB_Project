<?php

function monthOption() {
	$options = "";
	for ($m = 1; $m <= 12; $m++) {
		$currentMonth = ($m === date('m') ? "selected='$m'" : "");
		$options = $options . "<option value='$m' $currentMonth>";
		$options = $options . toMonth($m) . "</option>";
	}
	return $options;
}

function yearOption() {
	$options = "";
	for ($y = 2017; $y <= 2020; $y++) {
		$currentYear = ($y == date('Y') ? "selected='$y'" : "");
		$options = $options . "<option value='$y' $currentYear>$y</option>";
	}
	return $options;
}

function dayOption(){
	$options = "";
	for ($x = 0; $x < 7; $x++){
		$currentday = ($x == date('d')? "selected='$x'" : "");
		$options = $options . "<option value='$x' $currentday>";
		$options = $options . toDay($x). "</option>";
	}
	return $options;
}

function hourOption(){
	$options = "";
	for ($x = 0; $x < 24; $x++){
		$currenthour = str_pad($x, 2, "0", STR_PAD_LEFT);
		$options = $options . "<option value='$x'>$currenthour</option>";
	}
	return $options;
}

function hourLabels() {
	$labels = [];
	for ($i = 0; $i < 24; $i++) {
		array_push($labels, str_pad($i, 2, "0", STR_PAD_LEFT) . ":00");
	}
	return json_encode($labels);
}

function dayLabels() {
	$labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
	return json_encode($labels);
}

function monthLabels() {
	$labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	return json_encode($labels);
}

function yearLabels() {
	$labels = [2017, 2018, 2019, 2020];
	return json_encode($labels);
}

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

function getyearstamps (int $year){
    $query_date = "$year-m-d";
    $first = date ("Y-01-01 00:00:00", strtotime($query_date));
    $last = date ("Y-12-31 23:59:59", strtotime($query_date));
    $first_stamp = strtotime($first)*1000;
    $last_stamp = strtotime($last)*1000;
    return [$first_stamp, $last_stamp];
}


?>