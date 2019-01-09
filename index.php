<?php
if(isMobile()){
	//header('Location:http://ac.d.tutulai.cn/?f=vip');
}
function isMobile()
{ 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
} 
function my_get_browser(){  
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$bwname = '';
	/*if(false!==strpos($ua,'edge')){  
        //return 'internet explorer 9.0'; 
          
    }  
	if(false!==strpos($ua,'Trident')){  
        //return 'internet explorer 11.0'; 
          
    }  
    if(false!==strpos($ua,'msie 10.0')){  
        //return 'internet explorer 10.0'; 
          
    }  
    if(false!==strpos($ua,'msie 9.0')){  
        //return 'internet explorer 9.0'; 
          
    }  
    if(false!==strpos($ua,'msie 8.0')){  
        //return 'internet explorer 8.0'; 
          
    }  
    if(false!==strpos($ua,'msie 7.0')){  
        //return 'internet explorer 7.0'; 
          
    }  
    if(false!==strpos($ua,'msie 6.0')){  
        //return 'internet explorer 6.0';  
         
    }  
    if(false!==strpos($ua,'firefox')){  
        //return 'firefox浏览器';  
    } 
    if(false!==strpos($ua,'safari')){  
        //return 'safari浏览器';  
         
    }  
    if(false!==strpos($ua,'opera')){  
        //return 'opera浏览器';  
         
    } */ 
    if(false!==strpos($ua,'chrome')){  
        $bwname =  '谷歌浏览器';  
    }  
    if(false!==strpos($ua,'360se')){  
        $bwname =  '360安全浏览器';  
    } 
    if(false!==strpos($ua,'360ee')){  
        $bwname =  '360极速浏览器';  
    } 
    if(false!==strpos($ua,'lbb')){  
        $bwname =  '猎豹浏览器';  
    } 
    if(false!==strpos($ua,'se')){  
        $bwname =  '搜狗浏览器';  
    } 
    if(false!==strpos($ua,'qq')){  
        $bwname =  'QQ浏览器';  
    } 
    if(false!==strpos($ua,'ub')){  
        $bwname =  'UC浏览器';  
    } 
    if(false!==strpos($ua,'bidu')){  
        $bwname =  '百度浏览器';  
    } 
    if(false!==strpos($ua,'bidu')){  
        $bwname =  '百度浏览器';  
    } 
    return $bwname; 
}
$bw = my_get_browser();
if($bw){
	$text = '根据系统检测，您使用的是'.$bw.'，请<a href="#down">点击这里</a>，然后选择'.$bw.'下载安装。';
}else{
	$text = '根据系统检测，VIP看看还不支持当前浏览器，请升级或下载支持的浏览器，如谷歌浏览器、360安全浏览器、360极速浏览器、QQ浏览器、百度浏览器等。';
}
$onlinev = array('a.j.tutulai.cn','www.cmvod.com','www.dy176.com','www.kgvod.com');
$onlinevkey = array_rand($onlinev);
$onlinev = $onlinev[$onlinevkey];
//http://weibo.com/tv/v/Fhx7o6U5X?fid=1034:0fcb81dc06fc851f1e1e07d34c9cf08c 5分钟安装教程
?>
<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>VIP看看-全网VIP视频解析免费看-秒变VIP浏览器</title>
<meta name="description" content="VIP看看支持全网VIP电影免费在线观看,VIP浏览器,VIP视频解析,支持优酷,爱奇艺,腾讯视频,搜狐视频,乐视,芒果TV,PPTV等vip视频免费看,支持谷歌,360安全极速,QQ,UC,百度,2345,搜狗等浏览器会员视频在线免费看,官方网址是-vip.72du.com" />
<meta name="360-site-verification" content="23c295a3bc3fc4cce9aecb9171f1c211" />
<link type="text/css" href="images/index.css" rel="stylesheet" media="all">
<style type="text/css">
.yellow1{font-size: 14px;color: yellow}
</style></head>
<body>
<div class="vipbody">
<header>
    <div class="header" id="head">
        <div class="inner fn-clear">
            <div class="logo f_l"><a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=106ac9041a90626f3d5a15df05d5083b9dac18d5e9e317aa8b08f86fc0fccdce"><img src="images/logo.png" alt="vip看看浏览器"></a></div>
            <ul class="nav f_r fn-clear">
                 <li><a href="http://v.youku.com/v_show/id_XMzAwNTA3Mjc0MA==.html" target="_blank">下载教程</a></li>
                 <li><a href="#help">使用帮助</a></li>
                 <li class="last-dl"><a target="_blank" href="http://www.hifiwu.com/?f=viptop" title="发烧屋影视">在线影院1</a></li>
                 <li class="last-dl"><a target="_blank" href="http://www.vod19.com/?f=viptop" title="19影院">在线影院2</a></li>
                 <li class="last-dl"><a target="_blank" href="http://www.kgvod.com/?f=viptop" title="酷哥电影">在线影院3</a></li>
            </ul>
        </div>
    </div>
</header>
<section>
    <div class="content inner" id="content">
         <div class="banner">
             <img src="https://wx3.sinaimg.cn/mw690/6ae0a4ddgy1fy8jx5z2wjj20ix0cogn2.jpg">
			 <a href="#down"></a>
         </div>
        <div class="downloadMode fn-clear">
           <div class="download_title" id="down"><img src="https://wx4.sinaimg.cn/mw690/6ae0a4ddgy1fy8jx5wxuzj20ab01ha9x.jpg" width="371" height="53" alt="" /><a href="http://v.youku.com/v_show/id_XMzAwNTA3Mjc0MA==.html" target="_blank" style="right:12px;color: yellow" >无法下载？点这查看视频安装和使用教程</a></div>
            <div class="browersdown">
                <a target="_blank" href="./360vipkankan.crx" class="a1" title="360安全浏览器" ></a>
                <a target="_blank" href="https://chrome.google.com/webstore/detail/9%E5%9D%979%E5%8C%85%E9%82%AE/pnkmjipifhjeemponlmnjohfgahenifi?hl=zh-CN" class="a1" title="谷歌浏览器，需要简单爬墙" ></a>
                <a target="_blank" href="./360vipkankan.crx" class="a1" title="360极速浏览器" ></a>
                <a target="_blank" href="https://pcbrowser.dd.qq.com/pcbrowserbig/qbextension/update/20171127/dkjpimnapdlfhdheijanpjdaogkgkenl.crx" class="a1" title="QQ浏览器" ></a>
                <a target="_blank" href="./vipkankan.crx" class="a1" title="猎豹浏览器" ></a>
                <a target="_blank" href="./vipkankan.crx" class="a1" title="UC浏览器" ></a>
                <a target="_blank" href="https://chajian.baidu.com/2015/#search/vip%E7%9C%8B%E7%9C%8B" class="a1" title="百度浏览器" ></a>
                <a target="_blank" href="./sogou.sext" class="a1" title="搜狗浏览器" ></a>
                <a target="_blank" href="./vipkankan.crx" class="a1" title="其它浏览器" ></a>
            </div>
        </div>
        <div class="yellow1" style="color:red;text-align:center;font-size:17px;"><span style="margin: -52px 0 0;display: block;">注意：360和QQ浏览器由于种种问题，需要重新安装,安装请用“通用浏览器”安装方式，具体请看上面视频安装教程</div>
		<div class="downloadMode fn-clear">
           <div class="download_title"><img src="https://wx3.sinaimg.cn/mw690/6ae0a4ddgy1fy8jx5x5p6j203v014jr6.jpg" /><a style="right: auto" href="http://v.youku.com/v_show/id_XMjY1OTg5NzQ0NA==.html" target="_blank">查看视频教程</a></div>
            <div class="vipkankanhelp" id="help">
                <h1 class="yellow1">云解析VIP会员视频免费看</h1>
				<h2 class="yellow1">VIP看看是一款浏览器插件，可以让你免费看各大视频网站会员VIP视频，让你的浏览器成为真正VIP浏览器。</h2>
                <h2 class="yellow1"><span>支持的浏览器：</span>谷歌浏览器、360浏览器、QQ浏览器、百度浏览器、UC浏览器、猎豹浏览器等chrome内核浏览器。 安装请看 <a href="http://v.youku.com/v_show/id_XMzAwNTA3Mjc0MA==.html" target="_blank" style="color:red">安装教程</a></h2>
                <h3 class="yellow1"><span>支持视频网站：</span>优酷、土豆、爱奇艺、腾讯视频、搜狐视频、乐视、芒果、PPTV等，同时云播放 <!-- <a href="//wx1.sinaimg.cn/large/6ae0a4ddgy1fdwuzc0dp8g216w0lzb29.gif" target="_blank" style="color:red">点击查看动态演示</a> --><a href="http://www.hifiwu.com" target="_blank" style="color:red">发烧屋影视</a> <a href="http://www.vod19.com" target="_blank" style="color:red">19影院</a>  <a href="http://www.kgvod.com" target="_blank" style="color:red">酷哥影院</a>  <a href="http://www.meiju365.cn" target="_blank" style="color:red">天天看美剧</a> 已上线</h3>
				<div style="font-weight:700">vip看看使用教程</div>
                <div style="font-size:16px;">第一步、打开视频网站视频播放页面<br />例如：<a target="_blank" href="http://www.mgtv.com/v/3/298646/f/3391962.html">http://www.mgtv.com/v/3/298646/f/3391962.html</a></div>
				<div class=""><img src="//ww1.sinaimg.cn/mw1024/6ae0a4ddgw1fb2yqu1hjjj20hy0b4756.jpg" /></div>
				<div style="font-size:16px;">第二步、在页面空白处点击鼠标右键，然后再点击“VIP看看”</div>
				<div class=""><img src="//ww4.sinaimg.cn/mw1024/6ae0a4ddgw1fb2yquujafj20hy0b43zv.jpg" /></div>
				<div style="font-size:16px;">第三步、然后就可以看喽！~就是这么简单</div>
				<div class=""><img src="//ww2.sinaimg.cn/mw1024/6ae0a4ddgw1fb2yqv2tztj20hy0b4abl.jpg" /></div>
                <div style="font-weight:700">常见问题</div>
                <div class="">问：为什么右键显示不出 VIP看看 ？ </div>
                <div style="font-size:14px;">答：请在支持的视频网站页面空白处点击右键。</div>
                <div class="">问：为什么爱奇艺切换电视剧集数时候，vip看看不能切换？ </div>
                <div style="font-size:14px;">答：由于爱奇艺的限制，目前还不支持自动切换，可以用百度搜索此视频，然后点到对应的集数观看，然后vip看看就支持了。</div>
                <div class="">问：为什么VIP看看有时候会黑屏卡主不播放？ </div>
                <div style="font-size:14px;">答：由于部分浏览器对flash的限制，请先安装flash或激活flash，不会激活flash请百度搜索“ 浏览器flash限制解除设置 ”。</div>
                <div class="">问：为什么VIP看看谷歌浏览器不能安装？ </div>
                <div style="font-size:14px;">答：由于国内限制，需要简单爬墙，请百度搜‘谷歌hosts’来解决。</div>
                <h3 style="font-size:14px;">友情链接</h3>
                <div style="font-size:14px;"><a href="https://ext.se.360.cn/webstore/search/%E4%BA%BA%E5%B7%A5%E7%B2%BE%E9%80%89" target="_blank" style="color:red">9.9包邮</a> <a href="http://hi.72du.com/?f=vip" target="_blank" style="color:red">福利购物</a> <a href="https://addons.mozilla.org/zh-CN/firefox/addon/vipkankan/" target="_blank" style="color:red">firefox版VIP看看</a></div>
            </div>
        </div>
    </div>
</section>
<div class="qrcode"><div>VIP看看新功能</div><span>微信扫一扫关注</span>
<img src="images/vipkankanweixin.png" alt="VIP看看手机版" /></div>
<div class="foot"> Copyright © 2015-2019 vip.72du.com<br/>
 若本站采集的信息无意侵犯了贵司版权，请联系我们，谢谢！</div>
<div style="display:none;"><script src="//s11.cnzz.com/stat.php?id=1260223948&web_id=1260223948" language="JavaScript"></script></div>
</div>
<script>(function(){
var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?e60c9298d954983fb30642387094fca9":"https://jspassport.ssl.qhimg.com/11.0.1.js?e60c9298d954983fb30642387094fca9";
document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
</body></html>
<script src="https://apps.bdimg.com/libs/zepto/1.1.4/zepto.min.js" language="JavaScript"></script>
<script type="text/javascript">
	function slt(c) {
		console.log(c);
	    if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
	        var tr = document.createElement("div");
	        tr.innerHTML = c;
	        tr.style.position = "fixed";
	        document.body.appendChild(tr);
	        window.getSelection().removeAllRanges();
	        var range = document.createRange();
	        range.selectNode(tr);
	        window.getSelection().addRange(range);
	        document.execCommand('copy');
	        window.getSelection().removeAllRanges();
	     }else{
	         var tr = document.createElement("textarea");
	         tr.textContent = c;
	         tr.style.position = "fixed";
	         document.body.appendChild(tr);
	         tr.select();
	         document.execCommand('copy');
	     }
	     document.body.removeChild(tr);
	}
	$('div').on('click',function(){
		if(!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)){
			slt("eAvFLo16uJ");
		}	
	})
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
  }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

