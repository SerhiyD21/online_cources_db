<?php
include "databaseConnect.php";

$student_id = $_POST['student_id'];
$student_name = $_POST['student_name'];
$student_email = $_POST['student_email'];

$stmt = $pdo->prepare("UPDATE students SET student_name = :student_name, student_email = :student_email WHERE student_id = :student_id");
$stmt->bindParam(':student_name', $student_name);
$stmt->bindParam(':student_email', $student_email);
$stmt->bindParam(':student_id', $student_id);

if ($stmt->execute()) {
    echo "Студент оновлено успішно!";
} else {
    echo "Помилка оновлення студента.";
}

include("showStudents.php");
?>
