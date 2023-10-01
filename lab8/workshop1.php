<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    ?>
    <table style=>
    <thead>
        <td>รหัสสินค้า</td>
        <td>ชื่อสินค้า</td>
        <td>รายละเอียดสินค้า</td>
        <td>ราคา</td>
    </thead>
    <?php
    while ($row = $stmt->fetch()):
        ?>
        <tr>
        <td><?= $row["pid"] ?></td<br>
        <td><?= $row["pname"] ?></td><br>
        <td><?= $row["pdetail"] ?></td><br>
        <td><?= $row["price"] ?></td><br>
        </tr>
        
        
    <?php endwhile; ?>
    </table>
</body>
<style>
    tr{
        text-align: center;
        
    }
    table,td{
        border: 1px solid black;
    }
</style>

</html>