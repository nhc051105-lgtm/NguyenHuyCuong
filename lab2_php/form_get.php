<!DOCTYPE html>
<html>
<body>

<h3>Form GET</h3>

<form method="get">
    <input type="text" name="keyword">
    <button type="submit">Tìm</button>
</form>

<?php
if (isset($_GET['keyword'])) {
    echo "Bạn đang tìm kiếm từ khóa: " . $_GET['keyword'];
}
?>

</body>
</html>
