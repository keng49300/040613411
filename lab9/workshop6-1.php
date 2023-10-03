<?php include "connect.php" ?>
<?php $Name = $_POST["Name"];
$stmt = $pdo->prepare("DELETE FROM `member` WHERE username= '$Name'");
if ($stmt->execute()) {
    echo "ลบชื่อผู้ใช้",$Name,"สำเร็จ";
} else {
    echo "ไม่สำเร็จ";
}
?>
