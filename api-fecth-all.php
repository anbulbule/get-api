<?php
$con = new mysqli("localhost","id20032196_root","_W>d45b=r06kjZ++","id20032196_test") or die("Connection failed");
header('Content-Type: application/json');
header('Access-control-Allow-Origin: *');



$sql = "select stu_id,user_id,stu_name,email,password from student";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $output = $result->fetch_all(MYSQLI_ASSOC);
    echo $json_data = json_encode($output);
} else {

    echo json_encode(array('message' => 'No records found', 'status' => false));
}
