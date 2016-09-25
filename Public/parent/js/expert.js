/**
 * Created by Ideal on 2016/9/9.
 */
$(function(){
    /*$("#video video").live("click", function () {
        if($(this)[0].paused){
            $(this)[0].play();
        }else{
            $(this)[0].pause();
        }
    });*/
    /*展开收起*/
    $(".fold").on("click",function(){
        var fold='http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_fold.png';
        var unfold='http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_unfold.png';
        if($(this).attr("data-flag")==0){
            $(this).attr("data-flag","1");
            $(this).find("img").attr("src",unfold);
            $(this).siblings(".video-detail").find(".sp-content p").removeClass("height");
        }else{
            $(this).attr("data-flag","0");
            $(this).find("img").attr("src",fold);
            $(this).siblings(".video-detail").find(".sp-content p").addClass("height");
        }
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
    //player("video1","http://cloud.video.taobao.com/play/u/2554695624/p/1/e/6/t/1/fv/102/28552077.mp4","http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_bg.png")
    //player("video2","http://cloud.video.taobao.com/play/u/2554695624/p/1/e/6/t/1/fv/102/28552077.mp4","http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/zj_bg.png")
    //player(id,url,src);
    $.ajax({
        type:"get",
        url:"http://wxyd.vxin365.com/weixin_test/index.php/Home/User/video_port",
        dataType:'json',
        success:function(data){

            //data=JSON.parse(data);
            //console.log(data);
            //console.log(data.length);
            console.log(data);
            for(var i=0; i<data.length; i++){
                var videoId = 'video'+data[i].id;
                var videoUrl = data[i].url;
                var videoSrc = data[i].thum_image;
                console.log(videoId)
                player(videoId,videoUrl,videoSrc)
            }
        }
    })
})