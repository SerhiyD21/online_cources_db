<?php
include "databaseConnect.php";

$course_id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM course WHERE course_id=:id");
$stmt->bindParam(':id', $course_id);
if ($stmt->execute()) {
    echo "Курс видалено успішно!";
} else {
    echo "Помилка видалення курсу.";
}

include("showCourses.php");
?>
