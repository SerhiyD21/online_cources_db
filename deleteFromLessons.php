<?php
include "databaseConnect.php";

$lesson_id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM lesson WHERE lesson_id=:id");
$stmt->bindParam(':id', $lesson_id);
if ($stmt->execute()) {
    echo "Урок видалено успішно!";
} else {
    echo "Помилка видалення уроку.";
}

include("showLessons.php");
?>
