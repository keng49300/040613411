<?php include "connect.php" ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `member` WHERE username = ? );");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row=$stmt->fetch();
    
    echo $row["username"] ?>

    <img src="./<?= $row["username"] ?>.jpg" width="100px">
    <br>
    ชื่อสมาชิก:
    <?= $row["name"] ?><br>
    ที่อยู่:
    <?= $row["address"] ?><br>
    อีเมล:
    <?= $row["email"] ?><br>



</body>

</html>