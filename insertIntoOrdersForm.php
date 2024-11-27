<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка нового замовлення</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Додавання нового замовлення</h1>
    
    <form method="POST" action="insertIntoOrders.php">
        <input type="number" name="student_id" placeholder="ID студента" required>
        <input type="number" name="course_id" placeholder="ID курсу" required>
        <input type="date" name="order_date" placeholder="Дата замовлення" required>
        <input type="submit" value="Додати замовлення">
    </form>
</body>
</html>
