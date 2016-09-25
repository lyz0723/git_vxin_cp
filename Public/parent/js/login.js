/**
 * Created by Ideal on 2016/9/8.
 */
$(function(){
    $(".input button").on("click",function(){
        var time = 60;
        var $this = $(this);
        $this.attr("disabled","true");
        var timer=setInterval(function(){
            time--;
            if(time<=0){
                $this.text("重新获取");
                clearInterval(timer);
                $this.removeAttr("disabled")
            }else{
                $this.text(time+'s');
            }
        },1000)
    });
})