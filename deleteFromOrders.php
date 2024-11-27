<?php
include "databaseConnect.php";

$order_id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM `order` WHERE order_id=:id");
$stmt->bindParam(':id', $order_id);
if ($stmt->execute()) {
    echo "Замовлення видалено успішно!";
} else {
    echo "Помилка видалення замовлення.";
}

include("showOrders.php");
?>
