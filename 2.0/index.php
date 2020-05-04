<?php
    include_once "index_class.php";
    $slider = new index_class();
    $slider1_array = $slider->getInfo(1,"index_slider");
    $slider2_array = $slider->getInfo(2,"index_slider");
    $slider3_array = $slider->getInfo(3,"index_slider");

    $card = new index_class();
    $card1_array = $card->getInfo(1,"index_6weike");
    $card2_array = $card->getInfo(2,"index_6weike");
    $card3_array = $card->getInfo(3,"index_6weike");
    $card4_array = $card->getInfo(4,"index_6weike");
    $card5_array = $card->getInfo(5,"index_6weike");
    $card6_array = $card->getInfo(6,"index_6weike");

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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">微课网</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index(active).php">主页 <span class="sr-only">(current)</span></a>
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

            <button class="btn btn-outline-success my-2 my-sm-0"  data-toggle="modal" data-target="#myModal"><font color="white">登录</font></button>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- 模态框头部 -->
                        <div class="modal-header">
                            <h4 class="modal-title">欢迎你</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- 模态框主体 -->
                        <div class="modal-body">
                            <form>
                                <table>
                                    <tr><td><p class="blank"> </td></tr>
                                    <tr><td><p class="login_words">用户名</p></td><td><input type="text" name="user" class="form-control"></td></tr>
                                    <tr><td><p class="blank"> </td></tr>
                                    <tr><td><p class="login_words">密码</p></td><td><input type="password" name="user" class="form-control"></td></tr>
                                    <tr><td><p class="blank"> </td></tr>
                                </table>
                            </form>
                        </div>

                        <!-- 模态框底部 -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">登录</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-success my-2 my-sm-0"  data-toggle="modal" data-target="#myModal1"><font color="white">注册</font></button>
        <div class="modal fade" id="myModal1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- 模态框头部 -->
                    <div class="modal-header">
                        <h4 class="modal-title">欢迎你加入</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- 模态框主体 -->
                    <div class="modal-body">
                        <form>
                            <table>
                                <tr><td><p class="blank"> </td></tr>
                                <tr><td><p class="register_words">用户名</p></td><td><input type="text" name="user" class="form-control"></td></tr>
                                <tr><td><p class="blank"> </td></tr>
                                <tr><td><p class="register_words">密码</p></td><td><input type="password" name="user" class="form-control"></td></tr>
                                <tr><td><p class="blank"> </td></tr>
                                <tr><td><p class="register_words">重复密码</p></td><td><input type="password" name="user" class="form-control"></td></tr>
                                <tr><td><p class="blank"> </td></tr>
                                <tr><td><p class="register_words">邮箱</p></td><td><input type="password" name="user" class="form-control"></td></tr>
                                <tr><td><p class="blank"> </td></tr>
                            </table>
                    </div>

                    <!-- 模态框底部 -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">注册</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
</nav>
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
<hr>
<h2 class="text-center">RECOMMENDED LESSONS</h2>
<hr>
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
<hr>
<h2 class="text-center">USEFUL TIPS</h2>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <ul class="list-unstyled">
                <li class="media">
                    <img class="mr-3" src="images/tips1.svg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">按自己的节奏学习</h5>
                        按自己的喜好选择课程，随时随地在线学习
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-4">
            <ul class="list-unstyled">
                <li class="media">
                    <img class="mr-3" src="images/tips3.svg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">通过深入学习掌握技能</h5>
                        通过自定进度的测验和实践项目检验知识掌握和运用程度
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-4">
            <ul class="list-unstyled">
                <li class="media">
                    <img class="mr-3" src="images/tips2.svg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">与其他同学分享交流</h5>
                        交流和分享您遇到的问题和学习的心得，在讨论中提升
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>
<div class="container text-white bg-dark p-4">
    <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
            <div class="row text-center">
                <div class="col-sm-6 col-md-4 col-lg-4 col-12">
                    <ul class="list-unstyled">
                        <li class="btn-link"> <a>关于我们</a> </li>
                        <li class="btn-link"> <a>常见问题</a> </li>
                        <li class="btn-link"> <a>在线客服</a> </li>
                        <li class="btn-link"> <a>后台管理</a> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Copyright © MyWebsite. All rights reserved.</p>
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