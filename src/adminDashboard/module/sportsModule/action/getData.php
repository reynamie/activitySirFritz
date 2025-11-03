<?php
include '../../../../../assets/config/conn.php';
header('Content-Type: application/json');

try {
    $stmt = $conn->prepare("SELECT * FROM tb_student ORDER BY id DESC");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
