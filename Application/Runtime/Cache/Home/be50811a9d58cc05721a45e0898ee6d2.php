<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>方案</title>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/wap-common.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/web_common/css/rem.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/scheme.css"/>
    <link rel="stylesheet" href="/weixin_test/Public/parent/css/footer.css"/>
</head>
<body>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/web_common/js/rem.js"></script>
    <script type="text/javascript" src="/weixin_test/Public/parent/js/scheme.js"></script>
    <div class="content">

        <div class="header">
            <img class="cehua" data-falg="0" src="/weixin_test/Public/parent/images/fa_icon.png">
        </div>
        <div class="infor">
            <h2 class="title">&bull;&nbsp;本周方案</h2>
            <ul class="infor-list">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="infor1 clearfix">
                            <a href="/weixin_test/index.php/Home/User/expert_list?id=<?php echo ($vo["id"]); ?>">
                            <img src="<?php echo ($vo["route"]); ?>">
                            <div class="right">
                                <?php
 $name=strpos($vo['title'],'：'); $title=substr($vo['title'],0,$name); $t_title=substr($vo['title'],$name); $d_title=explode('：',$t_title); $s_title=$d_title[1]; ?>
                                <h2><?php echo $title?>游戏</h2>
                                <p><?php echo $s_title?></p>
                            </div>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="mask"></div>
    </div>
    <div class="fix-right">
        <h2>我的历史测评</h2>
        <div class="clearfix">
            <ul class="list">
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
                <li><img src="/weixin_test/Public/parent/images/cp_icon.png">2016-08</li>
            </ul>
        </div>
    </div>
    <footer class="footer">
        <ul class="clearfix">
            <li><a class="fot1" id="ceping" href="/weixin_test/index.php/Home/User/ceping">测评</a></li>
            <li><a class="fot2 active" id="scheme" href="/weixin_test/index.php/Home/User/scheme">方案</a></li>
            <li><a class="fot3" id="expert" href="/weixin_test/index.php/Home/User/expert">专家</a></li>
            <li><a class="fot4" id="my" href="/weixin_test/index.php/Home/User/my">我</a></li>
        </ul>
    </footer>
</body>
</html>