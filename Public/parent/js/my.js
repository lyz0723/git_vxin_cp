/**
 * Created by Ideal on 2016/9/8.
 */
$(function(){
    $(".babylist li").on("click",function(){
        var $this=$(this);
        $(".mask").fadeIn();
        $(".done").on("click",function(){
            $(".mask").fadeOut();
            $this.addClass("active").siblings().removeClass("active");
        });
        $(".no-done").on("click",function(){
            $(".mask").fadeOut();
        });
    });

})