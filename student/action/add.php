<?php
include '../../assets/config/conn.php';
$tuig = date("Y");

$fullname =  $_POST['fll_name'];
$contact  =  $_POST['contact'];
$email    =  $_POST['email'];
$section  =  $_POST['section'];
$year     =  $_POST['year'];
$password =  $_POST['password'];
$studentID =  "ST-01-$tuig";

$sql = "INSERT INTO tb_student (student_id, student_name, contact, email,  section, year, password )     VALUES(?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $studentID);
$stmt->bindParam(2, $fullname);
$stmt->bindParam(3, $contact);
$stmt->bindParam(4, $email);
$stmt->bindParam(5, $section);
$stmt->bindParam(6, $year);
$stmt->bindParam(7, $password);

if($stmt->execute()){
    echo "success";
}
?>