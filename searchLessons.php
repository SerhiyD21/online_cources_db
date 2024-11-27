<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук уроку</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук уроку</h1>

    <form method="POST" action="">
        <input type="text" name="search_lesson" placeholder="Введіть назву уроку">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_lesson']) && !empty($_POST['search_lesson'])) {
        $search = "%" . $_POST['search_lesson'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT lesson_title, lesson_number FROM lesson WHERE lesson_title LIKE :search;");
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Назва уроку: " . $row['lesson_title'] . ". Номер уроку: " . $row['lesson_number'] . "<br>";
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
        <li><a href="showLessons.php">Таблиця Lessons</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
