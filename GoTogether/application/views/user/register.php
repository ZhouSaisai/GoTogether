<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>注册</title>
    <!-- Bootstrap -->
    <link href="../../../static/css/main/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="../../../static/css/main/main.css" rel="stylesheet">
    <link href="../../../static/css/main/page.css" rel="stylesheet">
    <link href="../../../static/css/user/login_register.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../static/js/jquery-3.1.0.min.js"></script>
    <script src="../../../static/js/bootstrap.min.js"></script>
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
            <a href="#" class="navbar-brand"><img src="../../../static/images/main/logo.png" id="logo" alt="返回首页"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="index.html">首页</a></li>
                <li><a href="sports.html" >运动</a></li>
                <li><a href="analyse.html" >统计</a></li>
                <li><a href="activity.html" >活动</a></li>
                <li><a href="group.html" >跑友圈</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/index.php/user/login">登录</a></li>
                <li class="active"><a href="http://localhost/index.php/user/register">注册</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div> <!-- /.container -->
</nav> <!-- /.navbar -->
<div class="content">
    <div class="con-block container-1">
        <img src="../../../static/images/main/login-2.png" id="login-1">
        <div class="container-register">
            <div class="log_reg_div">
                <span class="log_reg">~立即加入益伙~</span>
            </div>
            <form role="form">
                <div class="form-group">
                    <label class="sr-only" for="userName">用户名/邮箱</label>
                    <input type="text" class="form-control" id="userName" placeholder="请输入用户名/邮箱">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="password1">密码</label>
                    <input type="password" class="form-control" id="password1" placeholder="请输入密码">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="password2">确认密码</label>
                    <input type="password" class="form-control" id="password2" placeholder="请再次输入密码">
                </div>
                <button type="submit" class="btn btn-success btn-block">注册</button>
                <p class="register-info info">已有账户？<a href="http://localhost/index.php/user/login">直接登录</a></p>
            </form>
        </div>
    </div>
    <div class="con-block container-2"></div>
</div>
<div class="foot">
    <img alt="foot" class="f" src="../../../static/images/main/foot.png">
</div>
</body>
</html>