<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення замовлення</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST" action="deleteFromOrders.php">
        <input type="text" name="delete_id" placeholder="ID замовлення для видалення" required>
        <input type="submit" value="Видалити замовлення">
    </form>

</body>
</html>
