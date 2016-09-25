<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>我的</title>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/wap-common.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/rem.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/kindergarten/css/my.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/kindergarten/css/footer.css"/>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/rem.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/kindergarten/js/my.js"></script>
</head>
<body>
<header>
    <h2>黑眼圈<span>园长</span></h2>
    <p class="infor"><img src="/weixin_test/Public/kindergarten/images/my_address.png"><span class="city">北京</span><span class="kindergarten">蓝天幼儿园</span></p>
    <p class="tou-img"><img src="/weixin_test/Public/kindergarten/images/my_tou.png"></p>
</header>
<div class="contain">
    <ul class="num-list clearfix">
        <li>
            <p class="num">500</p>
            <p class="num-name">园所学生（人）</p>
        </li>
        <li>
            <p class="num">34</p>
            <p class="num-name">园所教师（人）</p>
        </li>
        <li class="no-bor">
            <p class="num">14</p>
            <p class="num-name">园所班级（个）</p>
        </li>
    </ul>
    <div class="infor-boss">
        <div class="infor-list clearfix">
            <img class="icon" src="/weixin_test/Public/kindergarten/images/my_icon6.png">
            <div class="right clearfix">
                <span>用户名</span>
                <p class="fr"><span>黑眼圈</span></p>
            </div>
        </div>
        <div class="infor-list clearfix">
            <img class="icon" src="/weixin_test/Public/kindergarten/images/my_icon1.png">
            <div class="right clearfix">
                <span>性别</span>
                <p class="fr"><span>男</span><img src="/weixin_test/Public/kindergarten/images/my_jian.png"></p>
            </div>
        </div>
        <div class="infor-list clearfix">
            <img class="icon" src="/weixin_test/Public/kindergarten/images/my_icon7.png">
            <div class="right clearfix">
                <span>出生日期</span>
                <p class="fr"><span>1993-06-08</span><img src="/weixin_test/Public/kindergarten/images/my_jian.png"></p>
            </div>
        </div>
        <div class="infor-list clearfix">
            <img class="icon" src="/weixin_test/Public/kindergarten/images/my_icon2.png">
            <div class="right clearfix">
                <span>手机</span>
                <p class="fr"><span>15600666666</span><img src="/weixin_test/Public/kindergarten/images/my_jian.png"></p>
            </div>
        </div>
        <div class="infor-list clearfix">
            <a class="a_block" href="<?php echo U('Principal/baby_photo');?>">
                <img class="icon" src="/weixin_test/Public/kindergarten/images/my_icon3.png">
                <div class="right clearfix">
                    <span>宝宝相册</span>
                    <p class="fr"><img src="/weixin_test/Public/kindergarten/images/my_jian.png"></p>
                </div>
            </a>
        </div>
        <div class="infor-list clearfix">
            <a class="a_block" href="<?php echo U('Principal/video');?>">
                <img class="icon" src="/weixin_test/Public/kindergarten/images/my_icon4.png">
                <div class="right clearfix">
                    <span>宝宝视频</span>
                    <p class="fr"><img src="/weixin_test/Public/kindergarten/images/my_jian.png"></p>
                </div>
            </a>
        </div>
    </div>
    <div class="exit">退出登录</div>
</div>
<div class="mask">
    <div class="mask-content">
        <p class="done">设为当前宝宝</p>
        <p class="no-done">取消</p>
    </div>
</div>
<footer class="footer">
    <ul class="clearfix">
        <li><a class="fot1" href="/weixin_test/index.php/Home/Principal/index">测评</a></li>
        <li><a class="fot2" href="/weixin_test/index.php/Home/Principal/scheme">方案</a></li>
        <li><a class="fot3" href="/weixin_test/index.php/Home/Principal/expert">专家</a></li>
        <li><a class="fot4 fot4-light" href="/weixin_test/index.php/Home/Principal/my">我</a></li>
    </ul>
</footer>
</body>
</html>