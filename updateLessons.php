<?php
include "databaseConnect.php";

$lesson_id = $_POST['lesson_id'];
$course_id = $_POST['course_id'];
$lesson_title = $_POST['lesson_title'];
$lesson_number = $_POST['lesson_number'];

$stmt = $pdo->prepare("UPDATE lesson SET course_id = :course_id, lesson_title = :lesson_title, lesson_number = :lesson_number WHERE lesson_id = :lesson_id");
$stmt->bindParam(':course_id', $course_id);
$stmt->bindParam(':lesson_title', $lesson_title);
$stmt->bindParam(':lesson_number', $lesson_number);
$stmt->bindParam(':lesson_id', $lesson_id);

if ($stmt->execute()) {
    echo "Урок оновлено успішно!";
} else {
    echo "Помилка оновлення уроку.";
}

include("showLessons.php");
?>
