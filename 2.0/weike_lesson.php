<!DOCTYPE html>
<html lang="en">
<head>
    <title>lessons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/3Dstyle.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .blank {
            height: 200px;
        }

        .fakeimg{
            height: 200px;

        }
    </style>
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

<div class="container" style="margin-top:70px">
    <div class="row">
        <div class="col-sm-4">
            <div class="courseLogo">
                <div class="courseBefore"></div>
                <div class="courseAfter"><p>2017051604010</p><br><p>杜建俣</p><br><p>软工12班</p></div>
            </div>
            <div class="blank"></div>
            <h2>关于我</h2>
            <h5>我的照片:</h5>
            <p>关于我的介绍..</p>
            <h3>一些链接</h3>
            <p>说明文本</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">激活状态</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">链接</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">链接</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">禁用</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>标题</h2>
            <h5>副标题</h5>
            <div class="fakeimg">图像</div>
            <p>一些文本..</p>
            <p>菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！</p>
            <br>
            <h2>标题</h2>
            <h5>副标题</h5>
            <div class="fakeimg">图像</div>
            <p>一些文本..</p>
            <p>菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！菜鸟教程，学的不仅是技术，更是梦想！！！</p>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>底部内容</p>
</div>

</body>
</html>