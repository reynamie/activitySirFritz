<?php
include '../../../../../assets/config/conn.php'; // PDO connection

if (isset($_POST['id'])) {
    $stmt = $conn->prepare("SELECT * FROM tb_student WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
}
?>
