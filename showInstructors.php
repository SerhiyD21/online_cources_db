<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Instructors</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Instructors</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM instructor");
        printf("<h3>Список інструкторів:</h3>");
        printf("<table><tr><th>ІД</th><th>Ім'я інструктора</th><th>Кваліфікація</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['instructor_id'], $row['instructor_name'], $row['instructor_qualification']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoInstructorsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateInstructorsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromInstructorsForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>

