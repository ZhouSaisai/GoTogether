<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>欢迎进入益伙的世界</title>
    <!-- Bootstrap -->
    <link href="../../../static/css/main/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="../../../static/css/main/main.css" rel="stylesheet">
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

<div class="jumbotron" id="home">
    <div class="intro">
        <div class="container">

            <div class="row">
                <h1 class="text-center own-title">~益伙~</h1>

                <p class="text-center">嘿，一起来！<br/>和我们做运动的弄潮儿吧！</p><br/>
            </div>
            <div class="row triangles">
                <div class="up-triangle animated fadeInUp">
                    <div class="info">
                        <i class="icon icon-cogs"></i><br/>
                        梦<br>想
                    </div>
                </div>
                <div class="down-triangle animated fadeInDown">
                    <div class="info">

                        激情<br/>
                        <i class="icon icon-envelope-alt"></i>
                    </div>
                </div>
                <div class="up-triangle animated fadeInUp">
                    <div class="info">

                        <i class="icon icon-picture"></i><br/>
                        坚持
                    </div>
                </div>
                <div class="down-triangle animated fadeInDown">
                    <div class="info">

                        渴望<br/>
                        <i class="icon icon-code"></i>
                    </div>
                </div>

                <div class="down-triangle animated fadeInDown visible-sm">
                    <div class="info">

                        Clean Code<br/>
                        <i class="icon icon-code"></i>
                    </div>
                </div>

                <div class="up-triangle animated fadeInUp">
                    <div class="info">

                        <i class="icon icon-thumbs-up"></i><br/>
                        成就
                    </div>
                </div>
                <div class="down-triangle animated fadeInDown">
                    <div class="info">

                        关系<br/>
                        <i class="icon icon-laptop"></i>
                    </div>
                </div>
                <div class="up-triangle animated fadeInUp">
                    <div class="info">

                        <i class="icon icon-comments-alt"></i><br/>
                        荣<br>耀
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="foot">
    <img alt="foot" class="f" src="../../../static/images/main/foot.png">
</div>
<script type="text/javascript">
    $(function () {
        if($(window).width()>960){
            var tw = $('.triangles').width()/7+32;
            var ta = tw/2+22;
            $('.down-triangle').css('border-top',tw+'px solid rgba(0,0,0,0.8)').css('border-left',ta+'px solid transparent').css('border-right',ta+'px solid transparent');
            $('.up-triangle').css('border-bottom',tw+'px solid rgba(0,0,0,0.8)').css('border-left',ta+'px solid transparent').css('border-right',ta+'px solid transparent');
        }
        $('#wd-wrapper').sinusoid({
            minImgW: 80,
            maxImgW: 130,
            minImgAngle: -20,
            maxImgAngle: 20,
            leftFactor: 60,
            sinusoidFunction: {
                A: 70,
                T: 1700,
                P: 0
            }
        });
    });
</script>
</body>
</html>