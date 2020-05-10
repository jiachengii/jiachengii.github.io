$(function (){
	//了解更多的悬浮提示
    $("[data-toggle='popover']").popover();
	//初始化图片懒加载
	 $(".lazy").lazyload({
            //用图片提前占位
            placeholder : "https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1588470372549&di=85978ea10774bebb0d3145c4ca557755&imgtype=0&src=http%3A%2F%2Finews.gtimg.com%2Fnewsapp_match%2F0%2F10559394992%2F0.jpg", 
            // 载入使用何种效果
            effect: "fadeIn", 
        });
});
function Toast(msg,duration){
      duration=isNaN(duration)?3000:duration;
      var m = document.createElement('div');
      m.innerHTML = msg;
      m.style.cssText="max-width:60%;min-width: 150px;padding:0 14px;height: 40px;color: rgb(255, 255, 255);line-height: 40px;text-align: center;border-radius: 4px;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 999999;background: rgba(0, 0, 0,.7);font-size: 16px;";
      document.body.appendChild(m);
      setTimeout(function() {
        var d = 0.5;
        m.style.webkitTransition = '-webkit-transform ' + d + 's ease-in, opacity ' + d + 's ease-in';
        m.style.opacity = '0';
        setTimeout(function() { document.body.removeChild(m) }, d * 1000);
      }, duration);
    }
	 //监听滚动
 window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("top-btn").style.display = "block";
    } else {
        document.getElementById("top-btn").style.display = "none";
    }
}
//返回顶部操作
 function topk() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
	Toast('已回到顶部',2000);
}