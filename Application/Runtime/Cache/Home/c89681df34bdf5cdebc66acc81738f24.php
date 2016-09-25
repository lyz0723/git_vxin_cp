<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>专家</title>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/wap-common.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/rem.css"/>
    <link rel="stylesheet" href="http://g.alicdn.com/de/prismplayer/1.4.7/skins/default/index.css" />
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/expert.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/footer.css"/>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/parent/js/prism-min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/rem.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/parent/js/expert.js"></script>
</head>
<body>
   <div class="contain">
       <?php if(is_array($video)): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="header">
               <div class="video video-content">
                   <div id="video<?php echo ($vo["id"]); ?>" class="prism-player"></div>
               </div>
               <h2><?php echo ($vo["title"]); ?></h2>
               <div class="video-detail">
                   <span class="bor-left"></span>
                   <div class="clearfix guest">
                       <span class="left">本期嘉宾：</span>
                       <p><?php echo ($vo["honored"]); ?></p>
                   </div>
                   <div class="sp-content clearfix">
                       <span class="left">本期内容：</span>
                       <p class="height"><?php echo ($vo["content"]); ?></p>
                   </div>
               </div>
               <div class="fold" data-flag="0"><img src="/weixin_test/Public/parent/images/zj_fold.png"></div>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>
   </div>

    <footer class="footer">
        <ul class="clearfix">
            <li><a class="fot1" id="ceping" href="/weixin_test/index.php/Home/User/ceping">测评</a></li>
            <li><a class="fot2" id="scheme" href="/weixin_test/index.php/Home/User/scheme">方案</a></li>
            <li><a class="fot3 active" id="expert" href="/weixin_test/index.php/Home/User/expert">专家</a></li>
            <li><a class="fot4" id="my" href="/weixin_test/index.php/Home/User/my">我</a></li>
        </ul>
    </footer>
</body>
</html>