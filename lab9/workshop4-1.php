<html lang="en">
<?php include "connect.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $Name = $_POST["NAME"];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username= '$Name'");
    $stmt->execute();

    while ($row = $stmt->fetch()):
        ?>
        ชื่อสมาชิก:
        <?= $row["name"] ?><br>
        ที่อยู่:
        <?= $row["address"] ?><br>
        อีเมล:
        <?= $row["email"] ?><br>
        <img src="./<?= $row["username"] ?>.jpg" width="100px">

        <hr>
    <?php endwhile; ?>
</body>
<style>
    body{
        text-align: center;
    }
</style>

</html>