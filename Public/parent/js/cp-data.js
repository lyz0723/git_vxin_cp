/**
 * Created by Ideal on 2016/9/10.
 */
$(function(){
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
        $(".usual").show();
        $(".end").hide();
    });
    $(".list li:nth-child(1)").on("click",function(){
        $(".cehua").attr("data-falg","0");
        $(".content,.footer").removeClass("left-move").addClass("right-move");
        $(".mask").hide();
        $(".end").show();
        $(".usual").hide();
    });
    /*tab切换*/
    $(".nav li").on("click",function(){
        var index = $(this).index();
        $(this).addClass("active").siblings().removeClass("active");
        $(".cp-con").eq(index).show().siblings().hide();
    });

    /*身体脂肪进度控制*/
    var all=50;
    var current = 20.5;

})