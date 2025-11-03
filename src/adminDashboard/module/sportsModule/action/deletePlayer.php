<?php
include '../../../../../assets/config/conn.php'; // PDO connection

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  try {
    $stmt = $conn->prepare("DELETE FROM tb_student WHERE id = ?");
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
      echo "success";
    } else {
      echo "No record deleted";
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>
