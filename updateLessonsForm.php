<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення уроків</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="updateLessons.php">
        <input type="text" name="lesson_id" placeholder="ID уроку" required>
        <input type="text" name="course_id" placeholder="ID курсу" required>
        <input type="text" name="lesson_title" placeholder="Назва уроку" required>
        <input type="number" name="lesson_number" placeholder="Номер уроку" required>
        <input type="submit" value="Оновити уроки">
    </form>
</body>
</html>
