<?php
    include_once "conn/conn.php";
    $userss = $_COOKIE['username'];

    $sql1 = "select * from tb_user where name='$userss'";
    $check = mysqli_query($conn, $sql1);
    $rows = mysqli_fetch_row($check);

    $sql2 = "select * from tb_score where name='$userss'";
    $check1 = mysqli_query($conn, $sql2);
    $rows1 = mysqli_fetch_row($check1);

    $code = 0;
    $wen = 0;
    $li = 0;
    $all = 0;

    for($i=1;$i<=15;$i++){
        $all += $rows1[$i];
        if($i<=5){
            $code += $rows1[$i];
        }
        if($i>5&&$i<=10){
            $wen += $rows1[$i];
        }
        if($i>10&&$i<=15){
            $li += $rows1[$i];
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <link rel="stylesheet" href="CSS/color.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body class="personal_body">

<?php
include_once "top.php";
$top = new top();
$top->show();
?>


<table class="login_register_table">
    <tr><td><strong><font size="3" color="white">用户名</font></strong></td><td><strong><font size="3" color="white"><?php echo $rows[1]; ?></font></td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td><strong><font size="3" color="white">QQ</font></strong></td><td><strong><font size="3" color="white"><?php echo $rows[3]; ?></font></td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td><strong><font size="3" color="white">余额</font></strong></td><td><strong><font size="3" color="white"><?php echo $rows[5]; ?></font></td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td><strong><font size="3" color="white">积分</font></strong></td><td><strong><font size="3" color="white"><?php echo $rows[6]; ?></font></td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr>
        <td>
            <div class="shadow">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <p align="center">编程类</p>
                            </a>
                            <p align="center">获得积分:<?php echo $code/10;?>/50</p>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            C     :<?php echo $rows1[1]/10; ?><br>
                            Java  :<?php echo $rows1[2]/10; ?>  <br>
                            Python:<?php echo $rows1[3]/10; ?>  <br>
                            PHP   :<?php echo $rows1[4]/10; ?>  <br>
                            C#    :<?php echo $rows1[5]/10; ?>
                        </div>
                    </div>
                </div>
            </div>
        </td>
        <td>
        <div class="shadow">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <p align="center">文科</p>
                        </a>
                        <p align="center">获得积分:<?php echo $wen/10;?>/50</p>
                    </h3>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        语文:<?php echo $rows1[6]/10; ?>  <br>
                        英语:<?php echo $rows1[7]/10; ?>  <br>
                        历史:<?php echo $rows1[8]/10; ?>  <br>
                        地理:<?php echo $rows1[9]/10; ?>  <br>
                        政治:<?php echo $rows1[10]/10; ?>
                    </div>
                </div>
            </div>
        </div>
        </td>
        <td>
            <div class="shadow">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <p align="center">理工科</p>
                            </a>
                            <p align="center">获得积分:<?php echo $li/10;?>/50</p>
                        </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            数学  :<?php echo $rows1[11]/10; ?>  <br>
                            化学  :<?php echo $rows1[12]/10; ?>  <br>
                            物理  :<?php echo $rows1[13]/10; ?>  <br>
                            生物  :<?php echo $rows1[14]/10; ?>  <br>
                            计算机:<?php echo $rows1[15]/10; ?>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>