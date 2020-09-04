<?php 
require 'dbconh.php';
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
/*$sql="select datata from user_data where Uid = 9"; 

$response = array();
$location = array();
$result=$mysql_con->query($sql);
while($row=$result->fetch_array()) { 
  $udata=$row['datata']; 
} 

$response = $udata;

$myJSON = json_encode($response);

echo $myJSON;*/
$stmt = $mysql_con->prepare("SELECT datata1 FROM user_data where Uid = 11 LIMIT ?");
$stmt->bind_param("s", $obj->limit);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>