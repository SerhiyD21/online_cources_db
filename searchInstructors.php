<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук інструктора</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук інструктора</h1>

    <form method="POST" action="">
        <input type="text" name="search_instructor" placeholder="Введіть ім'я інструктора">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_instructor']) && !empty($_POST['search_instructor'])) {
        $search = "%" . $_POST['search_instructor'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT instructor_name, instructor_qualification FROM instructor WHERE instructor_name LIKE :search;");
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Ім'я інструктора: " . $row['instructor_name'] . ". Кваліфікація: " . $row['instructor_qualification'] . "<br>";
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
        <li><a href="showInstructors.php">Таблиця Instructors</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
