<!DOCTYPE html>
<html>
<body>

<h3>Form POST</h3>

<form method="post">
    <input type="text" name="name" placeholder="Tên"><br><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br><br>
    <button type="submit">Gửi</button>
</form>

<?php
if (isset($_POST['name'])) {
    echo "Đã nhận thông tin của " . $_POST['name'];
}
?>

</body>
</html>
