<?php
include "databaseConnect.php";

$order_id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM order_payment WHERE order_id=:id");
$stmt->bindParam(':id', $order_id);
if ($stmt->execute()) {
    echo "Платіж видалено успішно!";
} else {
    echo "Помилка видалення платежу.";
}

include("showOrderPayments.php");
?>
