<?php
include "databaseConnect.php";

$order_id = $_POST['order_id'];
$order_amount = $_POST['order_amount'];
$stmt = $pdo->prepare("INSERT INTO order_payment (order_id, order_amount) VALUES (:order_id, :order_amount)");
$stmt->bindParam(':order_id', $order_id);
$stmt->bindParam(':order_amount', $order_amount);
if ($stmt->execute()) {
    echo "Платіж додано успішно!";
} else {
    echo "Помилка додавання платежу.";
}

include("showOrderPayments.php");
?>
