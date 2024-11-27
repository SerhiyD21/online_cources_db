<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Lessons</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Lessons</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM lesson");
        printf("<h3>Список уроків:</h3>");
        printf("<table><tr><th>ІД</th><th>Назва уроку</th><th>Номер уроку</th><th>ІД курсу</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['lesson_id'], $row['lesson_title'], $row['lesson_number'], $row['course_id']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoLessonsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateLessonsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromLessonsForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>

