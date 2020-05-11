$(function (){
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
function green(){
		Greenbgcolor();
	}
	function dark(){
	 Darkbgcolor();
	}
	//更换背景色
function bgcolor(bcolor){
   var color = bcolor;
   var style;
   style = document.createElement('style');
   style.type = 'text/css';
   style.innerHTML = 'body {background-color: ' + color + ' !important;}';
   if(!style.parentNode) document.head.appendChild(style);
    document.head.addEventListener("DOMNodeRemoved",changeBackgroundColor)
   }
   //暗黑模式
function Darkbgcolor(){
   var color = '#262326';
   var style;
   style = document.createElement('style');
   style.type = 'text/css';
   style.innerHTML = 'body {background-color: ' + color + ' !important;color:#d2d0d0;}';
   if(!style.parentNode) document.head.appendChild(style);
    document.head.addEventListener("DOMNodeRemoved",changeBackgroundColor)
   }
   //护眼绿
function Greenbgcolor(){
   var color = '#C7EDCC';
   var style;
   style = document.createElement('style');
   style.type = 'text/css';
   style.innerHTML = 'body {background-color: ' + color + ' !important;color:#000;}';
   if(!style.parentNode) document.head.appendChild(style);
    document.head.addEventListener("DOMNodeRemoved",changeBackgroundColor)
   }