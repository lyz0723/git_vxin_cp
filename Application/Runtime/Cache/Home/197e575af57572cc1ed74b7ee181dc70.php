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
    <link rel="stylesheet" href="http://qd.vxin365.com/test_project/web_common/css/wap-common.css"/>
    <link rel="stylesheet" href="http://qd.vxin365.com/test_project/web_common/css/rem.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/my.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/footer.css"/>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/rem.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/parent/js/my.js"></script>
</head>
<body>
<header>
    <h2>宝妈</h2>
    <p class="infor"><img src="/weixin_test/Public/parent/images/my_address.png"><span class="city">北京</span><span class="kindergarten">智博幼儿园</span></p>
    <p class="tou-img"><img src="/weixin_test/Public/parent/images/baby_photo_wxd.png"></p>
</header>
<div class="contain">
    <ul class="babylist clearfix">
        <li class="active">
            <p class="tou-img"><img src="/weixin_test/Public/parent/images/baby_photo_wxd.png"></p>
            <p class="baby-name">王小东</p>
            <p class="baby-age">5岁</p>
        </li>
        <!--<li>-->
            <!--<p class="tou-img"><img src="/weixin_test/Public/parent/images/my_girl.png"></p>-->
            <!--<p class="baby-name">大宝宝</p>-->
            <!--<p class="baby-age">2岁</p>-->
        <!--</li>-->
    </ul>
    <div class="infor-boss">
        <div class="infor-list clearfix">
            <img class="icon" src="/weixin_test/Public/parent/images/my_icon1.png">
            <div class="right clearfix">
                <span>性别</span>
                <p class="fr"><span>男</span><img src="/weixin_test/Public/parent/images/my_jian.png"></p>
            </div>
        </div>
        <div class="infor-list clearfix">
            <img class="icon" src="/weixin_test/Public/parent/images/my_icon2.png">
            <div class="right clearfix">
                <span>手机</span>
                <p class="fr"><span>13810255365</span><img src="/weixin_test/Public/parent/images/my_jian.png"></p>
            </div>
        </div>

        <div class="infor-list clearfix">
            <a href="/weixin_test/index.php/Home/User/baby_photo"  class="a_block">
                <img class="icon" src="/weixin_test/Public/parent/images/my_icon3.png">
                <div class="right clearfix">
                    <span>宝宝相册</span>
                    <p class="fr"><img src="/weixin_test/Public/parent/images/my_jian.png"></p>
                </div>
            </a>
        </div>
        <div class="infor-list clearfix">
           <a class="a_block" href="/weixin_test/index.php/Home/User/video">
               <img class="icon" src="/weixin_test/Public/parent/images/my_icon4.png">
               <div class="right clearfix">
                   <span>宝宝视频</span>
                   <p class="fr"><img src="/weixin_test/Public/parent/images/my_jian.png"></p>
               </div>
           </a>
        </div>
        <div class="infor-list clearfix">
            <a class="a_block" href="/weixin_test/index.php/Home/User/medal">
                <img class="icon" src="/weixin_test/Public/parent/images/my_icon5.png">
                <div class="right clearfix">
                    <span>宝宝勋章</span>
                    <p class="fr"><img src="/weixin_test/Public/parent/images/my_jian.png"></p>
                </div>
            </a>
        </div>
    </div>
    <div class="exit" id="out_login"><a href="/weixin_test/index.php/Home/User/exit_login">退出登录</a></div>
</div>
<div class="mask">
    <div class="mask-content">
        <p class="done">设为当前宝宝</p>
        <p class="no-done">取消</p>
    </div>
</div>
<footer class="footer">
    <ul class="clearfix">
        <li><a class="fot1" id="ceping" href="/weixin_test/index.php/Home/User/ceping">测评</a></li>
        <li><a class="fot2" id="scheme" href="/weixin_test/index.php/Home/User/scheme">方案</a></li>
        <li><a class="fot3" id="expert" href="/weixin_test/index.php/Home/User/expert">专家</a></li>
        <li><a class="fot4 active" id="my" href="/weixin_test/index.php/Home/User/my">我</a></li>
    </ul>
</footer>
</body>
</html>