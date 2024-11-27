<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка нового платежу</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Додавання нового платежу</h1>
    
    <form method="POST" action="insertIntoOrderPayments.php">
        <input type="number" name="order_id" placeholder="ID замовлення" required>
        <input type="number" name="order_amount" placeholder="Сума платежу" required>
        <input type="submit" value="Додати платіж">
    </form>
</body>
</html>
