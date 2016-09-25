<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>爱宝相册</title>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/wap-common.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/rem.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/swiper.min.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent//css/baby-photo.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent//css/footer.css"/>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/rem.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/parent/js/swiper.min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/parent/js/baby-photo.js"></script>
</head>
<body>
<div id="title" class="clearfix">
    <span class="left-bg"></span>
    <p class="word"><span class="baby-name">某某</span>宝宝的运动相册</p>
    <span class="right-bg"></span>
</div>

<div class="list-boss">
    <?php if(is_array($exam_image)): foreach($exam_image as $k=>$vo): ?><div class="data-list">
            <h2 class="title">&bull;&nbsp;&nbsp;
                <?php
 $time=strtotime($vo['update_time']); $date=date("Y-m-d",$time); echo $date; ?>

            </h2>
            <input type="hidden" value="<?php echo ($vo["update_time"]); ?>">
            <ul class="small-img clearfix">

                    <?php foreach($vo['image'] as $k=>$s){?>
                    <li>
                        <img src="<?php echo $s?>">
                        </li>
                        <?php }?>
            </ul>
        </div><?php endforeach; endif; ?>
</div>
<div class="big-img">
    <div class="swiper-container">
        <ul class="swiper-wrapper">

        </ul>
        <div class="swiper-pagination"></div>
    </div>
</div>
</body>
</html>
<script>
    $("#image").click(function(){
        alert(1)
    })
</script>