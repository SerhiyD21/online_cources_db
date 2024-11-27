<?php
include "databaseConnect.php";

$course_name = $_POST['course_name'];
$instructor_id = $_POST['instructor_id'];
$stmt = $pdo->prepare("INSERT INTO course (course_name, instructor_id) VALUES (:course_name, :instructor_id)");
$stmt->bindParam(':course_name', $course_name);
$stmt->bindParam(':instructor_id', $instructor_id);
if ($stmt->execute()) {
    echo "Курс додано успішно!";
} else {
    echo "Помилка додавання курсу.";
}

include("showCourses.php");
?>
