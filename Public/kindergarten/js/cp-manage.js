/**
 * Created by Ideal on 2016/9/12.
 */
$(function(){
    $("#nav li").on("click",function(){
        var index=$(this).index();
        $(this).addClass("active").siblings().removeClass("active");
    })
});