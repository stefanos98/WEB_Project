<?php



// Resume the previous session
session_start();

// If the user is not logged in redirect to the login page
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}



require 'dbconh.php';
(__DIR__.'../../') //?? find the path_json machine

//Parsing data by using JSON Machine
$jsondata = \Jsonmachine\Jsonmachine::fromFile ('Location History.json'); //?? find the path

foreach ($jsondata as $locations => $dataA)
  foreach ($dataA as $movetype => $dataB)
    foreach ($dataB as $movedata => $dataC)

    //Objects' elements in locations
     switch ($movedata){
    case "timestampMs":
        $timestam = $dataC
        break;
      case "latitudeE7":
        $lat = $dataC/10000000;
        break;
    case "longitudeE7":
        $long = $dataC/10000000;
        break;
    case "accuracy":
        $accu = $dataC;
        break;
    case "activity":
        $type = $dataC[0]["activity"][0]["type"];
        $conf = $dataC[0]["activity"][0]["confidence"];
    break;

    ?>



     }