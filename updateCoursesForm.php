<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення курсів</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="updateCourses.php">
        <input type="text" name="course_id" placeholder="ID курсу" required>
        <input type="text" name="course_name" placeholder="Назва курсу" required>
        <input type="text" name="instructor_id" placeholder="ID інструктора" required>
        <input type="submit" value="Оновити курси">
    </form>
</body>
</html>
