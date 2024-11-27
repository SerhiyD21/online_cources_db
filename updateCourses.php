<?php
include "databaseConnect.php";

$course_id = $_POST['course_id'];
$course_name = $_POST['course_name'];
$instructor_id = $_POST['instructor_id'];

$stmt = $pdo->prepare("UPDATE course SET course_name = :course_name, instructor_id = :instructor_id WHERE course_id = :course_id");
$stmt->bindParam(':course_name', $course_name);
$stmt->bindParam(':instructor_id', $instructor_id);
$stmt->bindParam(':course_id', $course_id);

if ($stmt->execute()) {
    echo "Курс оновлено успішно!";
} else {
    echo "Помилка оновлення курсу.";
}

include("showCourses.php");
?>
