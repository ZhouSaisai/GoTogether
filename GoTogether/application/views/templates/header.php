<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>欢迎进入益伙的世界</title>
    <!-- Bootstrap -->
    <link href="css/main/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/main/main.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-color navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
            <button class="navbar-toggle" type="button" data-toggle="collapse"  data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
            <a href="#" class="navbar-brand"><img src="images/main/logo.png" id="logo" alt="返回首页"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">首页</a></li>
                <li><a href="sports.html" >运动</a></li>
                <li><a href="analyse.html" >统计</a></li>
                <li><a href="activity.html" >活动</a></li>
                <li><a href="group.html" >跑友圈</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.html">登录</a></li>
                <li><a href="register.html">注册</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div> <!-- /.container -->
</nav> <!-- /.navbar -->

        <h1><?php echo $title; ?></h1>
