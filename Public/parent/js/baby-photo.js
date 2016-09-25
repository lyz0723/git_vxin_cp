/**
 * Created by Ideal on 2016/9/14.
 */
$(function(){
    var imgUrl=[];
  /* var imgUrl = ["http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/test.jpg",
        "http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/test2.jpg",
        "http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/slider1-1.png",
        "http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/setion1_web.jpg",
        "http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/baby_photo1.jpg",
        "http://qd.vxin365.com/test_project/vxin_sport_cp_jz/images/baby_photo2.jpg"];*/

    var winHeight=$(window).height();
    var winWidth=$(window).width();
    var pageHeight=$(".page-boss").height();
    $("#img-boss li").height(winHeight-pageHeight);
    var html='';
    var str="";
    var num=0;  //定义不重复数标志
    $(".small-img li").on("click",function(){
        //imgUrl=[];
        var time=$(this).parents(".small-img").prev().val();
        $.ajax({
            type:"post",
            url:"http://wxyd.vxin365.com/weixin_test/index.php/Home/User/big_image",
            data:{'date':time},
            success:function(msg){
              imgUrl=JSON.parse(msg);

                console.log(imgUrl.length);
                console.log(imgUrl);

                num++;
                var index = $(this).index();

                for(var i = 0; i<imgUrl.length; i++){
                    str += '<li class="swiper-slide" >';
                    str += '<div class="center">';
                    str += '<img src="'+imgUrl[i]+'" >' ;
                    str += '</div>';
                    str += '</li>';
                };
                html += '<div class="swiper-container'+num+'"><ul class="swiper-wrapper">'+str+'</ul></div><div class="swiper-pagination swiper-pagination'+num+'"></div>';
                $(".big-img").html(html);
                $(".big-img").show();
                $(".swiper-slide").height(winHeight);
                $(".swiper-slide").width(winWidth);

                var swiper = new Swiper('.swiper-container'+num, {
                    pagination: '.swiper-pagination'+num,
                    initialSlide:index,
                    runCallbacksOnInit : true,
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 0
                });
            }
        });
    });
    $(".big-img").on("click", function () {
        console.log("swiper-container"+num);

        $(".big-img").hide();
        $(".swiper-wrapper").empty();
        str="";
        html="";
    })
})
