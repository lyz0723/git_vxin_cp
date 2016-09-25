/**
 * Created by Ideal on 2016/9/19.
 */
$(function(){
    $("#nav li").on("click",function(){
        $(this).addClass("active").siblings().removeClass("active");
    })
})