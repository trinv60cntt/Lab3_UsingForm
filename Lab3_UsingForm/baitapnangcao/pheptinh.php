<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Phep tinh</title>
    <style type="text/css">
        table {
            background: #ffd94d;
            border: 0 solid yellow;
        }

        body {
            background-color: cadetblue;
        }

        thead {
            background: #fff14d;
        }

        td {
            color: blue;
        }

        .center {
            margin: auto;
        }

        h3 {
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>

<body>
    <form align='center' action="ketquapheptinh.php" method="POST">
        <table class="center">
            <thead>
                <th colspan="2" align="center">
                    <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
                </th>
            </thead>
            <tr>
                <td>Chọn phép tính:</td>
                <td><input type="radio" name="op" value="Cộng" />Cộng
                    <input type="radio" name="op" value="Trừ" />Trừ
                    <input type="radio" name="op" value="Nhân" />Nhân
                    <input type="radio" name="op" value="Chia" />Chia

                </td>
            </tr>
            <tr>
                <td>Số thứ nhất: </td>
                <td><input type="text" width="80" name="n1" /></td>
            </tr>
            <tr>
                <td>Số thứ hai: </td>
                <td><input type="text" name="n2" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="tinh" value="Tính" /></td>
            </tr>

        </table>
    </form>
</body>

</html>