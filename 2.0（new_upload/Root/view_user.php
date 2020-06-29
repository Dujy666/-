<?php
    include_once '../conn/conn.php';
    $sql_count = "select * from tb_user";
    $count_result = mysqli_query($conn,$sql_count);
    $rows_count = mysqli_num_rows($count_result);

    $lesson = array(1=>'C',2=>'Java',3=>'Python',4=>'PHP',5=>'C#',6=>'语文',7=>'英语',8=>'历史',9=>'地理',10=>'政治',11=>'数学',12=>'化学',13=>'物理',14=>'生物',15=>'计算机');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看用户信息</title>
    <link rel="stylesheet" href="../CSS/color.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/forview.css">
</head>
<body background="../img/root.png">

<br>
<br>
<br>
<p align="center"><font size="8" color="white">查看信息及成绩</font></p>

<table align="center">
<tr>
    <td
        <div class="btn-group">
            <button type="button" class="btn btn-default"><a href="change_userinfo.php">修改信息</a></button>
            <button type="button" class="btn btn-default"><a href="delete_user.php">删除用户</button>
            <button type="button" class="btn btn-default"><a href="root_register.php">新增用户</a></button>
        </div>
</tr>
</table>

<br>
<br>
<br>
<br>
<br>


<div class="view">
<table align="center">
    <?php
    for($i = 1;$i<=$rows_count;$i++){
        $sql_info = "select * from tb_user where id=$i";
        $sql_info_result = mysqli_query($conn,$sql_info);
        $result = mysqli_fetch_row($sql_info_result);
        $sql_score = "select * from tb_score where  name='$result[1]'";
        $score  = mysqli_fetch_row(mysqli_query($conn,$sql_score));
    ?>
    <tr>
        <td>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                           href="#collapse<?php echo $i; ?>">
                            <font color="red" size="5"><?php echo $result[1]; ?></font>&nbsp;&nbsp;&nbsp;密码：<?php echo $result[2]; ?>&nbsp;&nbsp;&nbsp;QQ：<?php echo $result[3]; ?>&nbsp;&nbsp;&nbsp;PIN：<?php echo $result[4]; ?>&nbsp;&nbsp;&nbsp;
                            余额：<?php echo $result[5]; ?>&nbsp;&nbsp;&nbsp;积分：<?php echo $result[6]; ?>&nbsp;&nbsp;&nbsp;C语言可选：<?php echo $result[7]; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <?php
                            for($m=1;$m<=15;$m++){
                                echo $lesson[$m].":";
                                echo $score[$m];
                                echo '&nbsp;&nbsp;';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </td>
    </tr>
        <?php
    }
    ?>
</table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>