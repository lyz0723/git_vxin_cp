<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title id="title">测评结果</title>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/wap-common.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/rem.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/ceping-data.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/footer.css"/>
</head>

<body>
<div class="contain" id="content">
    <div class="content">
        <script type="text/javascript" src="/weixin_test/Public/web_common/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="/weixin_test/Public/web_common/js/rem.js"></script>
        <script type="text/javascript" src="/weixin_test/Public/parent/js/cp-data.js"></script>
        <header>
            <dl class="clearfix">
                <dt><img src="/weixin_test/Public/parent/images/baby_photo_wxd.png"></dt>
                <dd>
                    <h2><span class="name">王小东</span><span class="age">5岁</span>啦</h2>
                    <p class="p1"><span class="kindergarten">智博幼儿园</span><span class="class">中(一)班</span></p>
                    <p class="p2">距离上次测评<span>20</span>天了</p>
                </dd>
            </dl>
            <img class="cehua" data-falg="0" src="/weixin_test/Public/parent/images/fa_icon.png">
        </header>
        <div class="nav-boss">
            <ul class="nav clearfix">
                <li class="clearfix left-side active">
                    <a href="#"><span></span>测评结果</a>
                </li>
                <li class="clearfix right-side">
                    <a id="statistics"><span></span>横向统计</a>
                </li>
            </ul>
        </div>
        <div class="cp-content">
            <!--测评结果-->
            <div class="cp-con result">
                <!--默认期末版-->
                <div class="end">
                    <img src="/weixin_test/Public/parent/images/cp_result_end_list1.jpg">
                    <img src="/weixin_test/Public/parent/images/cp_result_end_list2.jpg">
                    <img src="/weixin_test/Public/parent/images/cp_result_end_list3.jpg">
                    <img src="/weixin_test/Public/parent/images/cp_result_end_list4.jpg">
                    <img src="/weixin_test/Public/parent/images/cp_result_end_list5.jpg">
                </div>
                <!--具体某月版，点击策划日期后才会显示-->
                <div class="usual">
                    <img src="/weixin_test/Public/parent/images/cp-usually_list1.jpg">
                    <img src="/weixin_test/Public/parent/images/cp_usually_list2.jpg">
                </div>
            </div>
            <!--end测评结果-->

            <!--横向统计-->
            <div class="cp-con statistic">
                <!--默认期末版-->
                <div class="end">
                    <img src="/weixin_test/Public/parent/images/cp_statitic_end_list1.jpg">
                    <img src="/weixin_test/Public/parent/images/cp_statitic_end_list2.jpg">
                </div>
                <!--具体某月版，点击策划日期后才会显示-->
                <div class="usual">
                    <img src="/weixin_test/Public/parent/images/cp_usually_list3.jpg">
                </div>
            </div>
            <!--end横向统计-->
        </div>
        <div class="mask"></div>
    </div>
    <div class="fix-right">
        <h2>我的历史测评</h2>
        <div class="clearfix">
            <ul class="list">

                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-09</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-07</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-06</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-05</li>
                <!--<li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>-->
            </ul>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/weixin_test/Public/web_common/css/rem.css"/>
<div class="loading"><img src="/weixin_test/Public/kindergarten/images/23004528562141508.png"></div>
<footer class="footer">
    <ul class="clearfix">
        <li><a class="fot1 active" id="ceping" href="/weixin_test/index.php/Home/User/ceping">测评</a></li>
        <li><a class="fot2" id="scheme" href="/weixin_test/index.php/Home/User/scheme">方案</a></li>
        <li><a class="fot3" id="expert" href="/weixin_test/index.php/Home/User/expert">专家</a></li>
        <li><a class="fot4" id="my" href="/weixin_test/index.php/Home/User/my">我</a></li>
    </ul>
</footer>
</body>
</html>
<script>

//    $(function(){
//
//
//        var winHeight=$(window).height();
//        $(".loading").height(winHeight);
//        $(".footer li").on("click",function(){
//            $(this).find("a").addClass("active").parents("li").siblings().find("a").removeClass("active")
//        });
//
//        $("#ceping").click(function(){
//            var url="<?php echo U('User/ceping');?>";
//            $.ajax({
//                url:url,
//                beforeSend:function(){
//                    $(".contain").empty();
//                    $(".loading").show();
//                },
//                success:function(msg){
//                    getHtml(msg);
//                    $("#title").html('测评结果');
//                    $(".loading").hide();
//                }
//            })
//        });
//        $("#scheme").click(function(){
//            var url="<?php echo U('User/scheme');?>";
//            $.ajax({
//                url:url,
//                beforeSend:function(){
//                    $(".contain").empty();
//                    $(".loading").show();
//                },
//                success:function(msg){
//                    getHtml(msg);
//                    $(".loading").hide();
//                    history.pushState("/weixin_test/index.php/Home/User/scheme", '', '/weixin_test/index.php/Home/User/scheme');
//                    $("#title").html('方案')
//                }
//            })
//        });
//
//        $("#expert").click(function(){
//            var url="<?php echo U('User/expert');?>";
//            $.ajax({
//                url:url,
//                beforeSend:function(){
//                    $(".contain").empty();
//                    $(".loading").show();
//                },
//                success:function(msg){
//                    getHtml(msg);
//                    $(".loading").hide();
//                    $("#title").html('专家');
//                }
//            })
//        });
//
//        $("#my").click(function(){
//            var url="<?php echo U('User/my');?>";
//            $.ajax({
//                url:url,
//                beforeSend:function(){
//                    $(".contain").empty();
//                    $(".loading").show();
//                },
//                success:function(msg){
//                    getHtml(msg);
//                    $(".loading").hide();
////                    history.pushState("/weixin_test/index.php/Home/User/my", '', '/weixin_test/index.php/Home/User/my');
//                    $("#title").html('我')
//                }
//            })
//        });
//
//
//
//    });
//
//    function getHtml(msg){
//        /*获取head里面的内容*/
//        var headEndArr = msg.split("</head>");
//        var headStartArr = headEndArr[0].split('<head lang="en">');
//        var headHtml = headStartArr[1];
//        $("head").empty();
//        $("head").append(headHtml);
//
//        /*获取body里面的内容*/
//        var bodyStart = msg.split("<body>");
//        var bodyContent = bodyStart[1].split("</body>");
//        var bodyHtml = bodyContent[0];
//        $("#content").empty();
//        $("#content").append(bodyHtml);
//
//    }
</script>