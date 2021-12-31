<?php
include('dbConnection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$id = $mydata['sid'];

//Retrive Specific Student information
$sql = "SELECT * FROM student WHERE id={$id}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//Returning Json Format Data as Response to Ajax Call
echo json_encode($row);



?>