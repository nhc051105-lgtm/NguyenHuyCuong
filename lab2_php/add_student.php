<!DOCTYPE html>
<html>
<body>

<h3>Thêm sinh viên</h3>

<form method="post">
    <input type="text" name="fullname" placeholder="Họ tên"><br><br>
    <input type="text" name="student_code" placeholder="Mã SV"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <button type="submit">Thêm mới</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "db_connect.php";

    $sql = "INSERT INTO students (fullname, student_code, email)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        $_POST['fullname'],
        $_POST['student_code'],
        $_POST['email']
    ]);

    echo "Thêm sinh viên thành công!";
}
?>

</body>
</html>
