<?php
include "databaseConnect.php";

$course_id = $_POST['course_id'];
$lesson_title = $_POST['lesson_title'];
$lesson_number = $_POST['lesson_number'];
$stmt = $pdo->prepare("INSERT INTO lesson (course_id, lesson_title, lesson_number) VALUES (:course_id, :lesson_title, :lesson_number)");
$stmt->bindParam(':course_id', $course_id);
$stmt->bindParam(':lesson_title', $lesson_title);
$stmt->bindParam(':lesson_number', $lesson_number);
if ($stmt->execute()) {
    echo "Урок додано успішно!";
} else {
    echo "Помилка додавання уроку.";
}

include("showLessons.php");
?>
