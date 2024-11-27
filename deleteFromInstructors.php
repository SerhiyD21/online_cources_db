<?php
include "databaseConnect.php";

$instructor_id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM instructor WHERE instructor_id=:id");
$stmt->bindParam(':id', $instructor_id);
if ($stmt->execute()) {
    echo "Інструктор видалено успішно!";
} else {
    echo "Помилка видалення інструктора.";
}

include("showInstructors.php");
?>
