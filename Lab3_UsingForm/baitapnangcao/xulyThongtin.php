<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xu ly thong tin</title>
</head>

<body>
    <b>Bạn đã đăng nhập thành công, dưới dây là những thông tin bạn nhập: <br></b>
    <?php
    if (isset($_POST['hoTen'])) {
        echo "<br>Họ tên: " . $_POST['hoTen'];
    }
    if (isset($_POST['radGT'])) {
        echo "<br>Giới tính: " . $_POST['radGT'];
    }
    if (isset($_POST['diaChi'])) {
        echo "<br>Địa chỉ: " . $_POST['diaChi'];
    }
    if (isset($_POST['sdt'])) {
        echo "<br>Điện thoại: " . $_POST['sdt'];
    }
    if (isset($_POST['qt'])) {
        echo "<br>Quốc tịch: " . $_POST['qt'];
    }
    echo "<br>Môn học: ";
    if (isset($_POST['checkboxvar'])) {
        echo implode(', ', $_POST['checkboxvar']);
    }
    if (isset($_POST['ghichu'])) {
        echo "<br>Ghi chú: " . $_POST['ghichu'] . "<br>";
    }
    ?>
    <a href="javascript:window.history.back(-1);"><br>Trở về trang trước</a>
</body>

</html>