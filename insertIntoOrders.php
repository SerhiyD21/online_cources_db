<?php
include "databaseConnect.php";

$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];
$order_date = $_POST['order_date'];
$stmt = $pdo->prepare("INSERT INTO `order` (student_id, course_id, order_date) VALUES (:student_id, :course_id, :order_date)");
$stmt->bindParam(':student_id', $student_id);
$stmt->bindParam(':course_id', $course_id);
$stmt->bindParam(':order_date', $order_date);
if ($stmt->execute()) {
    echo "Замовлення додано успішно!";
} else {
    echo "Помилка додавання замовлення.";
}

include("showOrders.php");
?>
