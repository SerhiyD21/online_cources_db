<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення замовлень</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="updateOrders.php">
        <input type="text" name="order_id" placeholder="ID замовлення" required>
        <input type="text" name="student_id" placeholder="ID студента" required>
        <input type="text" name="course_id" placeholder="ID курсу" required>
        <input type="text" name="order_date" placeholder="Дата замовлення" required>
        <input type="submit" value="Оновити замовлення">
    </form>
</body>
</html>
