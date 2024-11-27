<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення платежів</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="updateOrderPayments.php">
        <input type="text" name="order_id" placeholder="ID замовлення" required>
        <input type="text" name="order_amount" placeholder="Сума платежу" required>
        <input type="submit" value="Оновити платежі">
    </form>
</body>
</html>
