<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "connect.php" ?>
    <html>

    <head>
        <meta charset="utf-8">
    </head>

    <body>
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
            

            <hr>
        <?php endwhile; ?>
    </body>

    </html>
</body>

</html>