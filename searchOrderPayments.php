<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук платежу замовлення</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук платежу замовлення</h1>

    <form method="POST" action="">
        <input type="text" name="search_payment" placeholder="Введіть ID замовлення">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_payment']) && !empty($_POST['search_payment'])) {
        $search = "%" . $_POST['search_payment'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT order_id, order_amount FROM order_payment WHERE order_id LIKE :search;");
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "ID Замовлення: " . $row['order_id'] . ". Сума: " . $row['order_amount'] . "<br>";
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
        <li><a href="showOrderPayments.php">Таблиця OrderPayments</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
