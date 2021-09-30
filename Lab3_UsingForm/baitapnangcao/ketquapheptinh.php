<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ket qua phep tinh</title>
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
    $opErr = $n1Err = $n2Err = "";
    $op = $n1 = $n2 =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["op"])) {
            $opErr = "*Vui lòng nhập toán tử";
        } else {
            $op = test_input($_POST["op"]);
        }

        if (empty($_POST["n1"])) {
            $n1Err = "*Vui lòng nhập số thứ nhất";
        } else {
            $n1 = test_input($_POST["n1"]);
        }

        if (empty($_POST["n2"])) {
            $n2Err = "*Vui lòng nhập số thứ hai";
        } else {
            $n2 = test_input($_POST["n2"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $kq = "";
    if (isset($_POST['n1']) && isset($_POST['n2'])) {
        if (is_numeric($n1) && is_numeric($n2)) {
            if ($op == 'Cộng') {
                $kq = $n1 + $n2;
            }
            if ($op == 'Trừ') {
                $kq = $n1 - $n2;
            }
            if ($op == 'Nhân') {
                $kq = $n1 * $n2;
            }
            if ($op == 'Chia') {
                $kq = $n1 / $n2;
            }
        }
    } else $kq = "";
    ?>
    <form align='center' method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table class="center">
            <thead>
                <th colspan="3" align="center">
                    <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
                </th>
            </thead>
            <tr>
            <tr>
                <td>Chọn phép tính:</td>
                <td><span class="color"><?php
                                        if (isset($_POST['op'])) {
                                            echo $_POST['op'];
                                        }
                                        ?>
                        <span>
                </td>
                <td> <span class="error"><?php echo $opErr; ?></span></td>
            </tr>
            </tr>
            <tr>
                <td style="text-align: right;">Số 1:</td>
                <td><input type="text" disabled="disabled" name="n1" value="<?php echo $n1; ?>" /></td>
                <td><span class="error">
                        <?php
                        if (empty($_POST["n1"])) {
                            echo $n1Err;
                        } else if (!(is_numeric($n1)))
                            echo "<font color='red'>*Vui lòng nhập vào số! </font>";
                        ?>
                    </span></td>
            </tr>
            <tr>
                <td style="text-align: right;">Số 2:</td>
                <td><input type="text" disabled="disabled" name="n2" value="<?php echo $n2; ?>" /></td>
                <td><span class="error">
                        <?php
                        if (empty($_POST["n2"])) {
                            echo $n2Err;
                        } else if (!(is_numeric($n2)))
                            echo "<font color='red'>*Vui lòng nhập vào số! </font>";
                        ?>
                    </span></td>
            </tr>
            <tr>
                <td style="text-align: right;">Kết quả:</td>
                <td><input type="text" disabled="disabled" name="kq" value="<?php echo round($kq, 2); ?>" /></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="3"><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
            </tr>
        </table>

    </form>

</body>

</html>