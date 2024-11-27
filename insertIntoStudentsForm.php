<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Додавання студента</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="POST" action="insertIntoStudents.php">
        <input type="text" name="insert_name" placeholder="Ім'я студента">
        <input type="email" name="insert_email" placeholder="Електронна пошта студента">
        <input type="submit" name="insert" value="Додати студента">
    </form>

</body>

</html>
