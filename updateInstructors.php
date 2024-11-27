<?php
include "databaseConnect.php";

$instructor_id = $_POST['instructor_id'];
$instructor_name = $_POST['instructor_name'];
$instructor_qualification = $_POST['instructor_qualification'];

$stmt = $pdo->prepare("UPDATE instructor SET instructor_name = :instructor_name, instructor_qualification = :instructor_qualification WHERE instructor_id = :instructor_id");
$stmt->bindParam(':instructor_name', $instructor_name);
$stmt->bindParam(':instructor_qualification', $instructor_qualification);
$stmt->bindParam(':instructor_id', $instructor_id);

if ($stmt->execute()) {
    echo "Інструктор оновлено успішно!";
} else {
    echo "Помилка оновлення інструктора.";
}

include("showInstructors.php");
?>
