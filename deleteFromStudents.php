<?php
include "databaseConnect.php";

$id = $_POST['delete_id']; // Отримуємо ID студента
$stmt = $pdo->prepare("DELETE FROM student WHERE student_id=:id"); // Виконуємо запит для видалення студента
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
    echo "Студент видалений успішно!";
} else {
    echo "Помилка видалення студента.";
}

include("showStudents.php"); // Після видалення показуємо оновлену таблицю студентів
?>
