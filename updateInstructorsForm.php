<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення інструкторів</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="updateInstructors.php">
        <input type="text" name="instructor_id" placeholder="ID інструктора" required>
        <input type="text" name="instructor_name" placeholder="Ім'я інструктора" required>
        <input type="text" name="instructor_qualification" placeholder="Кваліфікація інструктора" required>
        <input type="submit" value="Оновити інструкторів">
    </form>
</body>
</html>
