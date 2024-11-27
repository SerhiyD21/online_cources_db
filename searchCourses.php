<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук курсу</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук курсу</h1>

    <form method="POST" action="">
        <input type="text" name="search_course" placeholder="Введіть назву курсу">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_course']) && !empty($_POST['search_course'])) {
        $search = "%" . $_POST['search_course'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT course_name, instructor_id FROM course WHERE course_name LIKE :search;");
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Назва курсу: " . $row['course_name'] . ". ІД Інструктора: " . $row['instructor_id'] . "<br>";
                }
            } else {
                echo "Немає результатів для вашого запиту.";
            }
        } catch (PDOException $e) {
            echo "Помилка запиту: " . $e->getMessage();
        }
    }
    ?>

    <br><br><br>

    <ul>
        <li><a href="showCourses.php">Таблиця Courses</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
