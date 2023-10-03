<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="workshop4-1.php" method="post">
        Username:<input type="text" name="NAME">
        <input type="submit">
    </form>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
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

</html>