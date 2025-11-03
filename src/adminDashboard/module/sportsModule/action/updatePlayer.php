<?php
include '../../../../../assets/config/conn.php'; // PDO connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("
        UPDATE tb_student SET
          student_name = :fullname,
          birthdate = :birthdate,
          age = :age,
          civil_status = :civilStatus,
          contact = :contact,
          birthPlace = :birthPlace,
          gender = :gender,
          email = :email,
          section = :section,
          year = :year,
          sports = :sports
        WHERE id = :id
    ");

    $stmt->execute([
        ':fullname' => $_POST['fullname'],
        ':birthdate' => $_POST['dtBirthdate'],
        ':age' => $_POST['age'],
        ':civilStatus' => $_POST['civilStatus'],
        ':contact' => $_POST['contactNo'],
        ':birthPlace' => $_POST['birthPlace'],
        ':gender' => $_POST['gender'],
        ':email' => $_POST['email'],
        ':section' => $_POST['section'],
        ':year' => $_POST['yearLevel'],
        ':sports' => $_POST['sports'],
        ':id' => $_POST['id']
    ]);

    echo "success";
}
?>
