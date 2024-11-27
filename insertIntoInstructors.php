<?php
include "databaseConnect.php";

$instructor_name = $_POST['instructor_name'];
$instructor_qualification = $_POST['instructor_qualification'];
$stmt = $pdo->prepare("INSERT INTO instructor (instructor_name, instructor_qualification) VALUES (:instructor_name, :instructor_qualification)");
$stmt->bindParam(':instructor_name', $instructor_name);
$stmt->bindParam(':instructor_qualification', $instructor_qualification);
if ($stmt->execute()) {
    echo "Інструктор доданий успішно!";
} else {
    echo "Помилка додавання інструктора.";
}

include("showInstructors.php");
?>
