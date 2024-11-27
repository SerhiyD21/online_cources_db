<?php
include "databaseConnect.php";

$name = $_POST['insert_name']; // Отримуємо ім'я студента
$group_id = $_POST['insert_group_id']; // Отримуємо ID групи
$stmt = $pdo->prepare("INSERT INTO student (student_name, student_email) VALUES (:name, :email)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email); // Тут можна додати email
if ($stmt->execute()) {
    echo "Студент доданий успішно!";
} else {
    echo "Помилка додавання студента.";
}

include("showStudents.php"); // Після додавання показуємо оновлену таблицю студентів
?>
