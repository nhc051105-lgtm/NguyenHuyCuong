<?php
require "db_connect.php";

$sql = "SELECT * FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<body>

<h3>Danh sách sinh viên</h3>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Họ tên</th>
    <th>Mã SV</th>
    <th>Email</th>
    <th>Hành động</th>
</tr>

<?php foreach ($data as $sv): ?>
<tr>
    <td><?= $sv['id'] ?></td>
    <td><?= $sv['fullname'] ?></td>
    <td><?= $sv['student_code'] ?></td>
    <td><?= $sv['email'] ?></td>
    <td>
        <a href="#">Sửa</a> |
        <a href="#">Xóa</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
