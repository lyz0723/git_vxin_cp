/**
 * Created by Ideal on 2016/9/12.
 */
$(function(){
    /*²à»¬*/
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
})