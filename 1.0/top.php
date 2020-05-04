<?php
include_once "user.php";
    class top{
        function show(){
            ?>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="main.html">校园闲置物品交易平台</a>
    </div>
    <ul class="nav navbar-nav">
        <li>
            <a href="course.php">首页</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                购买 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="course/C.php">C</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">C#</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                租借 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">语文</a></li>
                <li><a href="#">英语</a></li>
                <li><a href="course/politics.php">政治</a></li>
                <li><a href="#">地理</a></li>
                <li><a href="#">历史</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                社交 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="course/math.php">交友</a></li>
                <li><a href="#">聊天</a></li>
                <li><a href="#">活动</a></li>
                <li><a href="#">足迹</a></li>
            </ul>
        </li>
    </ul>

    <?php
    session_start();
    if($_SESSION['login']!=1||!isset($_SESSION['login'])){
        ?>
        <form class="navbar-form navbar-right" role="search">
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default"><b><a href="login.php">登录</a></b></button>
                <button type="button" class="btn btn-default"><b><a href="register.php">注册</a></b></button>

            </div>
        </form>
        <?php
    }else{
        ?>
        <form class="navbar-form navbar-right" role="search">
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default"><b><a href="personal_info.php"><strong><font color="red"><?php $p = $_SESSION["user"];
                $person=unserialize($p); $person->name;
                echo  $person->name; ?></font></strong></a></b></button>
                <button type="button" class="btn btn-default"><b><a href="charge.php">充值</a></b></button>
                <button type="button" class="btn btn-default"><b><a href="buy.php">购买</a></b></button>
                <button type="button" class="btn btn-default"><b><a href="log_out.php">登出</a></b></button>

            </div>
        </form>

        <?php
    }
    ?>
</nav>
<?php
        }
    }