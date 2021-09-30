<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>thanh toan tien dien</title>
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

        .error {
            color: red;
        }

        .color {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $tchErr = $n1Err = $n2Err = $dgErr = "";
    $tch = $n1 = $n2 = $dg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["tch"])) {
            $tchErr = "*Vui lòng nhập tên chủ hộ";
        } else {
            $tch = test_input($_POST["tch"]);
        }

        if (empty($_POST["n1"])) {
            $n1Err = "*Vui lòng nhập chỉ số cũ";
        } else {
            $n1 = test_input($_POST["n1"]);
        }

        if (empty($_POST["n2"])) {
            $n2Err = "*Vui lòng nhập chỉ số mới";
        } else {
            $n2 = test_input($_POST["n2"]);
        }

        if (empty($_POST["dg"])) {
            $dgErr = "*Vui lòng nhập đơn giá";
        } else {
            $dg = test_input($_POST["dg"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $tongtien = "";
    if (isset($_POST['tinh'])) {
        if (is_string($tch) && is_numeric($n1) && is_numeric($n2) && is_numeric($dg)) {
            if ($n1 > 0 && $n2 > 0) {
                if ($n1 < $n2)
                    $tongtien = ($n2 - $n1) * $dg;
            }
        }
    } else $tongtien = "";
    ?>

    <form align='center' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table class="center">
            <thead>
                <th colspan="4" align="center">
                    <h3>THANH TOÁN TIỀN ĐIỆN</h3>
                </th>
            </thead>
            <tr>
                <td style="text-align: right;">Tên chủ hộ: </td>
                <td><input type="text" name="tch" value="<?php echo $tch; ?>" /></td>
                <td></td>
                <td><span class="error">
                        <?php
                        if (empty($_POST["tch"])) {
                            echo $tchErr;
                            echo $tongtien = "";
                        }
                        ?>
                    </span></td>
            </tr>
            <tr>
                <td style="text-align: right;">Chỉ số cũ:</td>
                <td><input type="text" name="n1" value="<?php echo $n1; ?>" /></td>
                <td>(KW)</td>
                <td><span class="error">
                        <?php
                        if (empty($_POST["n1"])) {
                            echo $n1Err;
                        } else if ($n1 < 0)
                            echo "<font color='red'>*Vui lòng nhập chỉ số cũ hơn 0! </font>";
                        else if (!(is_numeric($n1)))
                            echo "<font color='red'>*Vui lòng nhập vào số! </font>";
                        ?>
                    </span></td>
            </tr>
            <tr>
                <td style="text-align: right;">Chỉ số mới:</td>
                <td><input type="text" name="n2" value="<?php echo $n2; ?>" /></td>
                <td>(KW)</td>
                <td><span class="error">
                        <?php
                        if (empty($_POST["n2"])) {
                            echo $n2Err;
                        } else if ($n2 < 0)
                            echo "<font color='red'>*Vui lòng nhập chỉ số mới hơn 0! </font>";
                        else if ($n1 > $n2) {
                            echo "<font color='red'>*Chỉ số mới phải lớn hơn chỉ số cũ! </font>";
                        } else if (!(is_numeric($n2)))
                            echo "<font color='red'>*Vui lòng nhập vào số! </font>";
                        ?>
                    </span></td>
            </tr>
            <tr>
                <td style="text-align: right;">Đơn giá:</td>
                <td><input type="text" name="dg" value="20000" /></td>
                <td>(VNĐ)</td>
                <td><span class="error">
                        <?php
                        if (empty($_POST["dg"])) {
                            echo $dgErr;
                        } else if ($dg < 0)
                            echo "<font color='red'>*Vui lòng nhập đơn giá lớn hơn 0! </font>";
                        else if (!(is_numeric($dg)))
                            echo "<font color='red'>*Vui lòng nhập vào số! </font>";
                        ?>
                    </span></td>
            </tr>
            <tr>
                <td style="text-align: right;">Số tiền thanh toán:</td>
                <td><input type="text" disabled="disabled" name="tongtien" value="<?php echo round($tongtien, 2); ?>" /></td>
                <td>(VNĐ)</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>

    </form>

</body>

</html>