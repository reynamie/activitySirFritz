<?php
session_start();
include '../../../../../assets/config/conn.php';



$fullname    = $_POST['fullname'];
$birthdate   = $_POST['dtBirthdate'];
$age         = $_POST['age'];
$civilStatus = $_POST['civilStatus'];
$contactNo   = $_POST['contactNo'];
$birthPlace  = $_POST['birthPlace'];
$gender      = $_POST['gender'];
$email       = $_POST['email'];
$section     = $_POST['section'];
$yearLevel   = $_POST['yearLevel'];
$sports      = $_POST['sports'];

$sql = "INSERT INTO tb_student (student_name, birthdate, age, civil_status, contact, birthPlace, gender, email, section, year, sports) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $fullname);
$stmt->bindParam(2, $birthdate);
$stmt->bindParam(3, $age);
$stmt->bindParam(4, $civilStatus);
$stmt->bindParam(5, $contactNo);
$stmt->bindParam(6, $birthPlace);
$stmt->bindParam(7, $gender);
$stmt->bindParam(8, $email);
$stmt->bindParam(9, $section);
$stmt->bindParam(10, $yearLevel);
$stmt->bindParam(11, $sports);
$stmt->execute();

if($stmt){
    echo "success";
}


?>