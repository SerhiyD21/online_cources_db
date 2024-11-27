<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Orders</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Orders</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM `order`");
        printf("<h3>Список замовлень:</h3>");
        printf("<table><tr><th>ІД</th><th>ІД студента</th><th>ІД курсу</th><th>Дата замовлення</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['order_id'], $row['student_id'], $row['course_id'], $row['order_date']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoOrdersForm.php">Вставити рядок</a><br></li>
        <li><a href="updateOrdersForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromOrdersForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>

