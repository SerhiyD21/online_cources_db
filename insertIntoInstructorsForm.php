<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка нового інструктора</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Додавання нового інструктора</h1>
    
    <form method="POST" action="insertIntoInstructors.php">
        <input type="text" name="instructor_name" placeholder="Ім'я інструктора" required>
        <input type="text" name="instructor_qualification" placeholder="Кваліфікація інструктора" required>
        <input type="submit" value="Додати інструктора">
    </form>
</body>
</html>
