<?php
include_once '../conn/conn.php';
$sql_count = "select * from tb_user";
$count_result = mysqli_query($conn,$sql_count);
$rows_count = mysqli_num_rows($count_result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除用户</title>
    <link rel="stylesheet" href="../CSS/color.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body background="../img/root.png">


<table class="login_register_table">
    <tr>
        <td colspan="3"><strong><font size="4" color="white">id</font></strong></td>

        <td colspan="3"><strong><font size="4" color="white">用户名</font></strong></td>

        <td colspan="3"><strong><font size="4" color="white">密码</font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><strong><font size="4" color="white">QQ</font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><strong><font size="4" color="white">PIN</font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><strong><font size="4" color="white">余额</font></strong></td>

        <td colspan="3"><strong><font size="4" color="white">积分</font></strong></td>

        <td colspan="3"><strong><font size="4" color="white">是否拥有C语言课程</font></strong></td>

    </tr>
    <?php
    for($i = 1;$i<=$rows_count+1;$i++){
        $sql_info = "select * from tb_user where id=$i";
        $sql_info_result = mysqli_query($conn,$sql_info);
        $result = mysqli_fetch_row($sql_info_result);
        ?>
        <tr>

            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[0]; ?></font></strong></td>

            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[1]; ?></font></strong></td>

            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[2]; ?></font></strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[3]; ?></font></strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[4]; ?></font></strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[5]; ?></font></strong></td>

            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[6]; ?></font></strong></td>

            <td colspan="3"><strong><font size="3" color="white"><?php echo $result[7]; ?></font></strong></td>

        </tr>
        <?php
    }
    ?>

</table>
<p align="center"><font size="8" color="white">删除用户</font></p>

<table align="center">
    <tr>
        <td
        <div class="btn-group">
            <button type="button" class="btn btn-default"><a href="view_user.php">查看信息及成绩</a></button>
            <button type="button" class="btn btn-default"><a href="change_userinfo.php">修改信息</a></button>
            <button type="button" class="btn btn-default"><a href="root_register.php">新增用户</a></button>
        </div>
    </tr>
</table>
<br>



<form method="post" action="delete_do.php">
    <table align="center">
        <tr>
            <td><font size="4" color="white">用户：</font>
                <select name="user">
                    <?php
                    for($k = 1;$k<=$rows_count;$k++){
                        $sql_info = "select * from tb_user where id=$k";
                        $sql_info_result = mysqli_query($conn,$sql_info);
                        $result = mysqli_fetch_row($sql_info_result);
                        ?>
                        <option value="<?php echo $result[1] ?>"><?php echo $result[1] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
            <td>
                &nbsp;
            </td>
            <td>
                <font size="4" color="white">确认删除：</font><input type="radio" name="r1" value="1"><input type="radio" name="r2" value="1"><input type="radio" name="r3" value="1">
            </td>
            <td>
                <button class="btn btn-default" type="submit">
                    删除
                </button>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>