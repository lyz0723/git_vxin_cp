/**
 * Created by Ideal on 2016/9/13.
 */
window.onload=function(){
    /*侧滑*/
    var winHeight=$(window).height();
    $(".content").css("min-height",winHeight);
    $(".mask").height(winHeight);
    $(".cehua").on("touchend",function(){
        if($(this).attr("data-falg")=="0"){
            $(this).attr("data-falg","1");
            $(".content,.footer").removeClass("right-move").addClass("left-move");
            $(".mask").show();
        }else{
            $(this).attr("data-falg","0");
            $(".content,.footer").removeClass("left-move").addClass("right-move");
        }

    });
    $(".mask").on("touchend",function(){
        $(".cehua").attr("data-falg","0");
        $(".content,.footer").removeClass("left-move").addClass("right-move");
        $(this).hide();
    });
    $(".list li").on("click",function(){
        $(".cehua").attr("data-falg","0");
        $(".content,.footer").removeClass("left-move").addClass("right-move");
        $(".mask").hide();
    })
    /*分享*/
    $(".share").on("click",function(){
        $(".share-guide").show();
    });
    $(".share-guide").on("click",function(){
        $(this).hide();
    });
    function player(ele,url,cover){
        // 初始化播放器
        var player = new prismplayer({
            id: ele, // 容器id
            source: url,// 视频地址
            autoplay: false,    //自动播放：否
            width: "3.75rem",       // 播放器宽度
            height: "1.85rem",      // 播放器高度
            cover:cover,
            skinLayout: [
                {
                    "name":"bigPlayButton",
                    "align":"cc"
                }

            ]
        });
    // 监听播放器的pause事件
        player.on("pause", function() {

        });
    }
    $(".video-content").css("background","url('http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_bg.png') no-repeat center");
    player("video1","http://cloud.video.taobao.com/play/u/2554695624/p/1/e/6/t/1/fv/102/28552077.mp4","http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_bg.png")
    player("video2","http://cloud.video.taobao.com/play/u/2554695624/p/1/e/6/t/1/fv/102/28552077.mp4","http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_bg.png")



}