<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка нового уроку</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Додавання нового уроку</h1>
    
    <form method="POST" action="insertIntoLessons.php">
        <input type="number" name="course_id" placeholder="ID курсу" required>
        <input type="text" name="lesson_title" placeholder="Назва уроку" required>
        <input type="number" name="lesson_number" placeholder="Номер уроку" required>
        <input type="submit" value="Додати урок">
    </form>
</body>
</html>
