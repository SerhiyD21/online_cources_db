<?php
include "databaseConnect.php";

$order_id = $_POST['order_id'];
$order_amount = $_POST['order_amount'];

$stmt = $pdo->prepare("UPDATE order_payments SET order_amount = :order_amount WHERE order_id = :order_id");
$stmt->bindParam(':order_amount', $order_amount);
$stmt->bindParam(':order_id', $order_id);

if ($stmt->execute()) {
    echo "Платіж оновлено успішно!";
} else {
    echo "Помилка оновлення платежу.";
}

include("showOrderPayments.php");
?>
