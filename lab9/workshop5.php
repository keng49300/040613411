<?php include "connect.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()):
        ?>
        <div> <a href="workshop5-1.php?username=<?=$row["username"]?>">
        <img src="./<?= $row["username"] ?>.jpg" width="100px">
        <br>
        ชื่อสมาชิก:
        <?= $row["name"] ?><br>
        ที่อยู่:
        <?= $row["address"] ?><br>
        อีเมล:
        <?= $row["email"] ?><br>
        
        </a>
        </div>
    <?php endwhile; ?>
    </div>
</body>
</html>