<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка нового курсу</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Додавання нового курсу</h1>
    
    <form method="POST" action="insertIntoCourses.php">
        <input type="text" name="course_name" placeholder="Назва курсу" required>
        <input type="number" name="instructor_id" placeholder="ID інструктора" required>
        <input type="submit" value="Додати курс">
    </form>
</body>
</html>
