<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhap thong tin</title>
</head>

<body>
    <form action="xulyThongtin.php" method="POST">
        <fieldset style="width:35%; margin:auto;">
            <legend><b>Enter your information</b></legend>
            <table>
                <tr>
                    <td>Họ tên: </td>
                    <td><input type="text" name="hoTen" size="40" maxlength="60" /></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><input type="text" name="diaChi" size="40" maxlength="60" /></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><input type="text" name="sdt" size="40" maxlength="60" /></td>
                </tr>
                <tr>
                    <td>Giới tính: </td>
                    <td><input type="radio" name="radGT" value="Nam" checked/><span>Nam</span>
                        <input type="radio" name="radGT" value="Nữ" /><span>Nữ</span>
                    </td>
                </tr>
                <td>Quốc tịch: </td>
                <td>
                    <select name="qt">
                        <option value="Việt Nam">
                            Việt Nam
                        </option>
                        <option value="Pháp">
                            Pháp
                        </option>
                        <option value="Anh">
                            Anh
                        </option>
                    </select>
                </td>
                <tr>
                    <td>Các môn đã học: </td>
                    <td>
                        <input type="checkbox" name="checkboxvar[]" value="PHP & MySQL" />PHP & MySQL
                        <input type="checkbox" name="checkboxvar[]" value="C#" />C#
                        <input type="checkbox" name="checkboxvar[]" value="XML" />XML
                        <input type="checkbox" name="checkboxvar[]" value="Python" />Python
                    </td>
                </tr>
                <tr>
                    <td>Ghi chú: </td>
                    <td>
                        <textarea name="ghichu" rows="4" style="height:98%;width:98%;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Gửi" />
                        <input type="reset" name="submit" value="Hủy" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>