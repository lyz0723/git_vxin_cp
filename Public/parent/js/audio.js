window.onload=function(){
	if($(".edui-upload-video").length>0){
		//将mp3格式的文件转变成audio标签
	var arrsrc=[];
	$.each($(".edui-upload-video"), function(i) {
		var src = $(".edui-upload-video").eq(i).attr("src");
		arrsrc.push(src);
		var mp=arrsrc[i].substring(src.length-3);
		if(mp=="mp3"){
			var mp3src=$(this).attr("src");
			$(this).after('<audio  class="edui-upload-video  vjs-default-skin video-js yp mp" controls="controls" width="100%" height="50" src="'+mp3src+'"  type="audio/mp3"></audio>')
			$(this).remove();
		}
	});
	//加载封面   获取video的src
	var spsrc=[];
	$.each($("video"), function(i) {
		$("video").eq(i).attr('poster',"http://qd.vxin365.com/test_project/jzb/images/666.jpg");
		$("video").eq(i).addClass("sp mp");
		var spsr = $("video").eq(i).attr("src");
		spsrc.push(spsr);
	});
	//将类名为sp的换成img
	$.each($(".sp"), function(){
		$(".sp").after('<img src="http://qd.vxin365.com/test_project/jzb/images/aiaiai.png" class="jia"/>');
		$(".sp").remove();
	});
	//给img添加data-name标识
	$.each($(".jia"),function(i){
		$(".jia").eq(i).attr("data-name",i);
	})
	$("body").append('<div class="floatbox"></div>')
	//点击图片 应该弹出框  播放应该对应的视频
	$(".jia").click(function(){
		$(".floatbox").css({display:"block"});
		var m = $(this).attr("data-name");
		$(".floatbox").html('<video width="100%" height="280" controls="controls" class="v" poster="http://qd.vxin365.com/test_project/jzb/images/666.jpg"><source type="video/mp4"></source></video><div class=blackbox></div>')
		$(".floatbox video").attr("src",spsrc[m]);
		$(".blackbox").click(function(){
			$(".floatbox").html("");
			$(".floatbox").css({display:"none"});
		})
	})
	//给所有的video标签添加封面
	$.each($("video"),function(i){
		$("video").eq(i).attr('poster',"http://qd.vxin365.com/test_project/jzb/images/666.jpg");
	})
	//获取audio的音长
	$.each($("audio"), function(i) {
		//遍历audio，再每个音频后追加自定义的样式
		$("audio").eq(i).after('<div class="reaudio"><div class="voicewave"><span class="one vv"></span><span class="two vv"></span><span class="three vv"></span></div><div class="mid-jindu"><div class="jindu"><img src="http://qd.vxin365.com/test_project/jzb/images/woniu.png" class="wn"/></div></div><div class="right-time"><span class="doingtime">00:00</span><span class="xieline">/</span><span class="alltime"></span></div></div>');
		//调用获取时长函数,返回对应的时长
		getTime();
		function getTime() {
			setTimeout(function () {
				var duration = Math.round($("audio")[i].duration);
				if(isNaN(duration)){
					getTime();
				}
				else{
					var minu=parseInt(duration/60);
					var miao=duration-minu*60;
					$(".alltime").eq(i).html("0"+minu+':'+miao);
				}
			}, 10);
		}
		//将本来的audio隐藏
		$(".yp").eq(i).hide();
		$.each($(".voicewave"), function(m) {
			$(".voicewave").eq(m).attr("data-name",m);
		});
		var ct=null;
		var voice=null;
		var c=0;
		//给音波添加点击事件，一点击，音乐播放
		$(".voicewave").click(function(){
			var n=$(this).attr("data-name");
			var musictime=Math.round($(".yp")[n].duration);
			if(c==0){
				$(".yp")[n].play();
				ct = setInterval(function(){
					//随着音乐播放时间也走动
					var aaa=parseInt($(".yp")[n].currentTime);
					var fen=parseInt(aaa/60);
					var sec=aaa-fen*60;
					if(sec<9){
						sec++;
						$(".doingtime").eq(n).html("0"+fen+":0"+sec);
					}else if(9<sec<=59){
						sec++;
						$(".doingtime").eq(n).html("0"+fen+":"+sec);
						if(sec>59){
							sec=0;
							fen++;
						}
					}
					var t= sec+fen*60;
					if(t==musictime){
						clearInterval(ct);
					}
					//进度条增加
					var step=t/musictime*2.0;
					$(".voicewave").eq(n).siblings(".mid-jindu").children(".jindu").css({"width":step+"rem"});
				},1000);
				//音乐播放时音浪变化
				var g=0;
				$(".voicewave").eq(n).children(".vv").hide();
				voice=setInterval(function(){
					if(g<3){
						g++;
						$(".voicewave").eq(n).children(".vv").eq(0).show();
						$(".voicewave").eq(n).children(".vv").eq(g).show();
					}else{
						g=0;
						$(".voicewave").eq(n).children(".vv").hide();
					}
				},300)
				c=1;
			}else if(c==1){
				c=0;
				$("audio")[n].pause();
				clearInterval(voice);
				clearInterval(ct);
				$(".vv").show();
				var p=$(".mid-jindu").eq(n).css("width");
				var q=$(".jindu").eq(n).css("width");
				if(p==q){
					$(".voicewave").eq(n).siblings(".mid-jindu").children(".jindu").css({"width":0});
					$(".doingtime").eq(n).html("00:00");
					fen=0;
					sec=0;
				}
			}
		})
	});
		
		
		
	}else{
		
	}
	
	
	
	
}
