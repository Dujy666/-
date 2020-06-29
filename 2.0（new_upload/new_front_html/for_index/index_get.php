<?php
    class index_get extends index_init {
        var $slider;
        var $card;
        var $users = [];
        function __construct()
        {
            include_once "index_class.php";
            include_once "./database_connection/db_connection.php";
            $this->slider = new index_class();
            $this->card = new index_class();
            $db = new db_connection("db_weike");
            $sql = "select username from tb_user";
            $result = mysqli_query($db->db_conn(),$sql);
            $user_list = mysqli_fetch_array($result);
            while($user_list = mysqli_fetch_row($result)){
                array_push($this->users,$user_list[0]);
            }
        }

        function init_Users_CookieCheck(){
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>微课网</title>
                <!-- Bootstrap -->
                <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
                <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
                <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
                <link href="css/index_style.css" rel="stylesheet">
            </head>
            <body>

            <script type="text/javascript">
                function checkusername()
                {

                    var slist = '<?php echo urlencode(json_encode($this->users));?>';
                    var list = eval(decodeURIComponent(slist));
                    var myform = document.getElementById("formRegister");
                    var username = myform.newUser.value;

                    if(username.length < 4)
                    {
                        errusername.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    }else{
                        for(var i = 0;i<list.length;i++){
                            if(list[i]==username){
                                errusername.innerHTML = "<font color='red'>已存在</font> ";
                                return false;
                            }else{
                                errusername.innerHTML = "<font color='green'>✔</font> ";
                                return true;
                            }
                        }
                        return true;
                    }
                }

                function checkpassword()
                {
                    var myform = document.getElementById("formRegister");
                    var password = myform.newPassword.value.length;
                    if(password < 8)
                    {
                        errpassword.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    }else{
                        errpassword.innerHTML = "<font color='green'>✔</font>";
                        return true;
                    }
                }
                function checkpasswordagain()
                {
                    var myform = document.getElementById("formRegister");
                    var repassword = myform.newRePassword.value;
                    var password = myform.newPassword.value;
                    if(password != repassword)
                    {
                        errrepassword.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    } else if(repassword.length  == 0) {
                        errrepassword.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    }else{
                        errrepassword.innerHTML = "<font color='green'>✔</font>";
                        return true;
                    }
                }




                function checkqq()
                {
                    var myform = document.getElementById("formRegister");
                    var qq = myform.newQQ.value;
                    if(qq != parseInt(qq))
                    {
                        errqq.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    }else{
                        errqq.innerHTML = "<font color='green'>✔</font>";
                        return true;
                    }
                }

                function checkpin()
                {
                    var myform = document.getElementById("formRegister");
                    var safecodelength = myform.newPIN.value.length;
                    if(safecodelength < 4)
                    {
                        errpin.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    }else{
                        errpin.innerHTML = "<font color='green'>✔</font>";
                        return true;
                    }
                }

                function checkpinagain()
                {
                    var myform = document.getElementById("formRegister");
                    var repin = myform.newRePIN.value;
                    var pin = myform.newPIN.value;
                    if(pin != repin)
                    {
                        reerrpin.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    } else if(repin.length  == 0) {
                        reerrpin.innerHTML = "<font color='red'>✘</font>";
                        return false;
                    }else{
                        reerrpin.innerHTML = "<font color='green'>✔</font>";
                        return true;
                    }
                }


                function checkform()
                {
                    checkusername();
                    checkqq();
                    checkpin();
                    checkpasswordagain();
                    checkpassword();
                    checkpinagain();

                    if(checkusername()&&checkpassword()&&checkpasswordagain()&&checkpin()&&checkqq()&&checkpinagain())
                    {
                        return true;
                    }
                    else{
                        return false;
                    }


                }
            </script>
            <?php
        }

        function get_header()
        {
            // TODO: Implement get_header() method.
            ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <div class="container" >
                    <a class="navbar-brand" href="#">微课网</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index(active).php">主页 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./course.php">全部课程</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">作者</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">陈浩基</a>
                                    <a class="dropdown-item" href="#">张逸群</a>
                                    <a class="dropdown-item" href="#">杜建俣</a>
                                    <a class="dropdown-item" href="#">徐昊</a>
                                </div>
                            </li>
                        </ul>
                        <?php
                        if(isset($_COOKIE['user'])){
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle"
                                        data-toggle="dropdown">
                                    <?php echo $_COOKIE['user']?><span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">个人中心</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">退出</a></li>
                                </ul>
                            </div>
                        <?php
                        }else{
                        ?>
                        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#myModal">
                            <font color="white">登录</font></button>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- 模态框头部 -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">欢迎你</h4>
                                    </div>

                                    <!-- 模态框主体 -->
                                    <div class="modal-body">
                                        <form method="post" action="/for_LoginAndRegister/login_register_process.php"
                                              id="formLogin">
                                            <table>
                                                <tr>
                                                    <td><p class="blank"></td>
                                                </tr>
                                                <tr>
                                                    <td><p class="login_words">用户名</p></td>
                                                    <td><input type="text" name="username" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><p class="blank"></td>
                                                </tr>
                                                <tr>
                                                    <td><p class="login_words">密码</p></td>
                                                    <td><input type="password" name="password" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><p class="blank"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <button style="margin-left: 130px;" type="submit"
                                                                class="btn btn-success">登录
                                                        </button>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">忘记了密码？</a></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>

                                    <!-- 模态框底部 -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">关闭</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                         <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#myModal1">
                            <font color="white">注册</font></button>
                        <div class="modal fade" id="myModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- 模态框头部 -->
                                <div class="modal-header">
                                    <h4 class="modal-title">欢迎你加入</h4>
                                </div>

                                <!-- 模态框主体 -->
                                <div class="modal-body">
                                    <form method="post" action="for_LoginAndRegister/login_register_process.php"
                                          id="formRegister" onsubmit="return checkform()">
                                        <table>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">用户名</p></td>
                                                <td><input type="text" name="newUser" class="form-control"
                                                           placeholder="用户名长度为4-10" datatype="s4-10"
                                                           onchange="checkusername()"></td>
                                                <td>
                                                    <div id="errusername" align="center"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">密码</p></td>
                                                <td><input type="password" name="newPassword" class="form-control"
                                                           placeholder="密码长度为8-16" maxlength="16"
                                                           onchange="checkpassword()"></td>
                                                <td>
                                                    <div id="errpassword" align="center"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">重复密码</p></td>
                                                <td><input type="password" name="newRePassword" class="form-control"
                                                           placeholder="重复上面输入的密码" onchange="checkpasswordagain()"></td>
                                                <td>
                                                    <div id="errrepassword" align="center"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">邮箱</p></td>
                                                <td><input type="text" name="newEmail" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">QQ</p></td>
                                                <td><input type="text" name="newQQ" class="form-control"></td>
                                                <td>
                                                    <div id="errqq" align="center"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">PIN</p></td>
                                                <td><input type="password" name="newPIN" class="form-control"
                                                           placeholder="4位，用来找回密码" maxlength="4" onchange="checkpin()">
                                                </td>
                                                <td>
                                                    <div id="errpin" align="center"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p class="blank"></td>
                                            </tr>
                                            <tr>
                                                <td><p class="register_words">重复PIN</p></td>
                                                <td><input type="password" name="newRePIN" class="form-control"
                                                           placeholder="重复上面的安全码" maxlength="4"
                                                           onchange="checkpinagain()"></td>
                                                <td>
                                                    <div id="reerrpin" align="center"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="blank">
                                                        <option name="register_symbol" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button style="margin-left: 130px;" type="submit"
                                                            class="btn btn-success">注册
                                                    </button>
                                                </td>
                                                <td>
                                                    <div style="font-size: smaller; color: gray;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注册成功后自动登录</div>
                                                </td>
                                            </tr>
                                        </table>
                                </div>

                                <!-- 模态框底部 -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">关闭</button>
                                </div>

 ?>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </nav>
            <?php
        }

        function get_scroller()
        {
            // TODO: Implement get_scroller() method.
            $slider1_array = $this->slider->getInfo(1,"index_slider");
            $slider2_array = $this->slider->getInfo(2,"index_slider");
            $slider3_array = $this->slider->getInfo(3,"index_slider");
            ?>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo $slider1_array[3]?>" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $slider1_array[1]?></h5>
                                        <p><?php echo $slider1_array[2]?></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo $slider2_array[3];  ?>" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $slider2_array[1]; ?></h5>
                                        <p><?php echo $slider2_array[2]; ?></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo $slider3_array[3] ?>" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $slider3_array[1] ?></h5>
                                        <p><?php echo $slider3_array[2] ?></p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <?php
        }

        function get_lesson()
        {
            // TODO: Implement get_lesson() method.
            $card1_array = $this->card->getInfo(1,"index_6weike");
            $card2_array = $this->card->getInfo(2,"index_6weike");
            $card3_array = $this->card->getInfo(3,"index_6weike");
            $card4_array = $this->card->getInfo(4,"index_6weike");
            $card5_array = $this->card->getInfo(5,"index_6weike");
            $card6_array = $this->card->getInfo(6,"index_6weike");
            ?>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $card1_array[3] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card1_array[1] ?></h5>
                                <p class="card-text"><?php echo $card1_array[2] ?></p>
                                <a href="#" class="btn btn-primary">进入微课程</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $card2_array[3] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card2_array[1] ?></h5>
                                <p class="card-text"><?php echo $card2_array[2] ?></p>
                                <a href="#" class="btn btn-primary">进入微课程</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $card3_array[3] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card3_array[1] ?></h5>
                                <p class="card-text"><?php echo $card3_array[2] ?></p>
                                <a href="#" class="btn btn-primary">进入微课程</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $card4_array[3] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card4_array[1] ?></h5>
                                <p class="card-text"><?php echo $card4_array[2] ?></p>
                                <a href="#" class="btn btn-primary">进入微课程</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $card5_array[3] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card5_array[1] ?></h5>
                                <p class="card-text"><?php echo $card5_array[2] ?></p>
                                <a href="#" class="btn btn-primary">进入微课程</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $card6_array[3] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $card6_array[1] ?></h5>
                                <p class="card-text"><?php echo $card6_array[2] ?></p>
                                <a href="#" class="btn btn-primary">进入微课程</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        function get_tips()
        {
            // TODO: Implement get_tips() method.
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips1</h5>
                                     tip1
                                </div>
                            </li>
                            <li class="media my-4">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips2</h5>
                                    tip2
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips3</h5>
                                    tip3
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips4</h5>

                                </div>
                            </li>
                            <li class="media my-4">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips5</h5>
                                    tip5
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips6</h5>
                                  tip6
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips7</h5>
                                    tip7
                                </div>
                            </li>
                            <li class="media my-4">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips8</h5>
                                   tip8
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Tips9</h5>
                                     tip9
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }


        function get_footer()
        {
            // TODO: Implement get_footer() method.
            ?>
            <hr>
            <!--底部链接-->
            <div class="container text-white bg-dark p-4">
                <div class="row">
                    <div class="col-6 col-md-8 col-lg-7">
                        <div class="row text-center">
                            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
                                <ul class="list-unstyled">

                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
                                <ul class="list-unstyled">
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 col-6">
                        <address>
                            <strong>微课网站</strong><br>
                            。。。。。。。。。。。。。。。<br>
                            。。。。。。。。。。。。。。。<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <address>
                            <strong></strong><br>
                            <a href="mailto:#">@example.com</a>
                        </address>
                    </div>
                </div>
            </div>
            <!--copyright-->
            <footer class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © 微课网. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery-3.4.1.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap-4.4.1.js"></script>
            </body>
            </html>
            <?php
        }

        function get_123()
        {
            // TODO: Implement get_123() method.
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/1.png"></div>
                            <div class="col-lg-6 col-10 ml-1">
                                <h4>快速</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/2.png"></div>
                            <div class="col-lg-6 col-10 ml-1">
                                <h4>简单</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/3.png"></div>
                            <div class="col-lg-6 col-10 ml-1">
                                <h4>方便</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        function get_words_1()
        {
            // TODO: Implement get_words_1() method.
            ?>
            <hr>
            <h2 class="text-center">RECOMMENDED LESSONS</h2>
            <hr>
            <?php
        }

        function get_words_2()
        {
            // TODO: Implement get_words_2() method.
            ?>
            <hr>
            <h2 class="text-center">USEFUL TIPS</h2>
            <hr>
            <?php
        }
    }