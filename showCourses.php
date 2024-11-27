<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Courses</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Courses</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM course");
        printf("<h3>Список курсів:</h3>");
        printf("<table><tr><th>ІД</th><th>Назва курсу</th><th>ІД інструктора</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['course_id'], $row['course_name'], $row['instructor_id']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoCoursesForm.php">Вставити рядок</a><br></li>
        <li><a href="updateCoursesForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromCoursesForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>

