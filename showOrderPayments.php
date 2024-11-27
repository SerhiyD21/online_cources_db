<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця OrderPayments</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця OrderPayments</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM order_payment");
        printf("<h3>Список платежів:</h3>");
        printf("<table><tr><th>ІД</th><th>ІД замовлення</th><th>Сума платежу</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['order_payment_id'], $row['order_id'], $row['payment_amount']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoOrderPaymentsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateOrderPaymentsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromOrderPaymentsForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>

