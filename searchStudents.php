<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук студента</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук студента</h1>

    <form method="POST" action="">
        <input type="text" name="search_student" placeholder="Введіть ім'я студента">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_student']) && !empty($_POST['search_student'])) {
        $search = "%" . $_POST['search_student'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT student_name, student_email FROM student WHERE student_name LIKE :search;");
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Ім'я студента: " . $row['student_name'] . ". Email: " . $row['student_email'] . "<br>";
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
        <li><a href="showStudents.php">Таблиця Students</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
