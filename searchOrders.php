<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук замовлення</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук замовлення</h1>

    <form method="POST" action="">
        <input type="text" name="search_order" placeholder="Введіть ID замовлення">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_order']) && !empty($_POST['search_order'])) {
        $search = "%" . $_POST['search_order'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT order_id, student_id, course_id, order_date FROM `order` WHERE order_id LIKE :search;");
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "ID Замовлення: " . $row['order_id'] . ". ID Студента: " . $row['student_id'] . ". ID Курсу: " . $row['course_id'] . ". Дата замовлення: " . $row['order_date'] . "<br>";
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
        <li><a href="showOrders.php">Таблиця Orders</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
