<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" dir="ltr">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function pull_urls(){other_links.innerHTML="";$.ajax({ url:"pull.php", data:"pull_url=1", type:'post', dataType:'json', success:function(result){ other_links.innerHTML="";for(var i=0;i<result.length;i++){ newrow=other_links.insertRow(other_links.rows.length); newcol=newrow.insertCell(0);newcol.innerHTML=result[i][0]; newcol=newrow.insertCell(1); newcol.innerHTML=result[i][1]; newcol=newrow.insertCell(2); newcol.innerHTML="<a target=_blank href="+result[i][2]+">"+result[i][2].substring(0,20)+"</a>";newcol=newrow.insertCell(3);newcol.innerHTML="<button onclick=del_url("+result[i][0]+")>del</button>";} }});} 
function pull_urls_div(){other_links_div.innerHTML="";$.ajax({ url:"pull.php", data:"pull_url=1", type:'post', dataType:'json', success:function(result){ other_links.innerHTML="";for(var i=0;i<result.length;i++){ other_links.innerHTML+="<a target=_blank href="+result[i][2]+" style=\"font-size:"+Math.ceil(Math.random()*6+8)+"pt;\">"+result[i][1]+"</a><a href='' onclick='del_url("+result[i][0]+")'>... </a>";} }});} 
</script>
<script type="text/javascript">
function del_url(id){ if(confirm("will delete url:"+id)) $.ajax({ url:"push.php",data:"link_id="+id+"&del_url=1", success:function(result){ pull_urls(); }});}
</script> 
<script type="text/javascript">
function push_urls(linkname,linkvalue){ $.ajax({ url:"push.php", data:"link_name="+linkname+"&link_value="+linkvalue, success:function(result){alert(result);}}); }
</script>
<script type="text/javascript">
function del_urls(){ if(confirm("will delete all urls!"))if(confirm("do you really want to clear all recorded urls?")) $.ajax({ url:"push.php", data:"", success:alert("didnot clear all urls")}); }
</script>
<style>
div.td_title {
	height: 38px;
	background: transparent url(images/panel-title.png) left bottom no-repeat;
	padding: 0 14px;
	color: #7CA9ED;
	font-size: 18px;
	font-family: Arial;
	font-weight: bold;
	}
.td_content_left {
	height: auto;
	background: url() repeat-y;
	margin: 0;
	padding: 0 20px;
	font-size: 14px;
	font-family: Times New Roman;
	text-align: left;
}
.td_content{
	height: auto;
	width:auto;
	background: url(panel-content.png)
		margin: 0;
	padding: 0 20px;
	font-size: 14px;
	font-family: Times New Roman;
	text-align: left;
}
div.td_bottom {
	height: 12px;
	margin: 0;
	background: url(images/panel-bottom.png) left top no-repeat;
}
h1,h2,h3,h4,h5{color:#1A5CC8}
.li{
	font-size:14
		font-weight:bold;
	}
td a{
	font-size:12px;
}
li{
	align:center;
}
a:link {
	color: #330099;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	}
td#col_1{ opacity:0.9 }
td#col_1{ opacity:0.6 }
td#col_2{ opacity:0.8 }
td#col_3{ opacity:0.8; }
td#col_4{ opacity:0.8; }
#container { 
	background-color: #000333
	width:100%;
}
body{
	background-repeat: repeat;
	background-color:#000000;
	font-size:12px;font-family:Arial,Console,Verdana,Courier New;
}
#header { width: 900px; height: 10px; Z-INDEX:1; POSITION:relative; margin: 0 auto; padding: 90px 0 0 0; text-align: left; }
#footer { border-top: none !important;  
"background: url(blog/bot_bg.jpg) no-repeat bottom center; "
height: 145px;} 
</style>
<!-- "	background-image:url('blog/body_bg.jpg');" "	color:#362e2b;"
"	background-attachment:scroll; background-position:center top; "
"	background: url(blog/head_bg.jpg) repeat-x center top;"
-->
<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> </head>
<title>####</title>
<div id='container'>
	<div id='flow_1' style="opacity:0.02;Z-INDEX:0;POSITION:absolute;top:103px;LEFT:-30px;"> <img src="blog/00.gif" width="500px"></div>
<!--	<div id='header'> </div> -->
	<div id='body' style="align=right;">	
		<table width=76% style="border-collapse:collapse;margin-right:123px;table-layout:fixed;background-color:;"  align="center" border=0><tr>
		<td id='col_1' width=20% bgcolor='f1e6d4'><!-- bgcolor='F1E6D4' -->  <!--'F1E6D4'-->
		<h3>access</h3>
		<ul><li>
			<a href="http://localhost" target="_blank">local</a>
			<a href="http://219.223.254.55/portal/index_default.jsp" target="_blank">网关</a>
			<a href="chrome://downloads/" target="_blank">down</a>
			<a href="http://localhost/phpmyadmin" target="_blank">phpadmin</a>
			</li><li>
			1.music
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://mp3.sogou.com/music.so?query=%BC%D9%C8%E7%B0%AE%D3%D0%CC%EC%D2%E2+%BF%A8%C2%E5%B6%F9&class=1&pf=&w=02009900&st=&ac=1&sourcetype=sugg&_asf=mp3.sogou.com&_ast=1358149570"> sogou</a></td>
			<td><a  target="_blank" href="http://www.xiami.com">xiami</a></td>
			<td><a  target="_blank" href="http://y.qq.com/webplayer/p.html">qq</a></td>
			<td><a  target="_blank" href="http://kzone.kuwo.cn/mlog/Collect?uid=66169041&type=pl">kuwo</a></td>
			<td><a  target="_blank" href="http://tieba.baidu.com/p/1203286964?pn=3">tieba</a></td>
			</table></li><li>
			2.pic
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://huaban.com">huaban</a></td>
			<td><a  target="_blank" href="http://xiangce.baidu.com/u/419566195">百度相册</a></td>
			<td><a  target="_blank" href="http://hi.baidu.com/brandohero/albumcreate/multipicture/album/">album</a></td>
			</table></li><li>
			3.space
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://qzone.qq.com">qzone</a></td>
			<td><a  target="_blank" href="http://hi.baidu.com/new/loveu"><font p strong size=4 color="#633333">baidu</font></a></td>
			</table></li><li>
			4.search
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://google.com">google</a></td>
			<td><a  target="_blank" href="http://freecode.com/search">freecode</a></td>
			</table>
			<script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script><script type="text/javascript" language="JavaScript" src="js/search.js"></script>
			<div name="searchercontainer" onload="_load();document.search_web.search.focus();" scroll="yes" screen_capture_injected="true">
			<!-- nav -->
			<div id="nav">
			<a href="#" class="one here" onclick="showLabel(this);return false;" id="nav_web"><span>网页</span></a>
			<a href="#" class="two" onclick="showLabel(this);return false;" id="nav_photo"><span>图片</span></a>
			<a href="#" class="three" onclick="showLabel(this);return false;" id="nav_music"><span>音乐</span></a>
			<a href="#" class="four" onclick="showLabel(this);return false;" id="nav_video"><span>影视</span></a>
			</div>
			<div id="search_form" STYLE="font-size:10pt;">
			<form action="http://so.classic023.com/search.asp" method="post" target="_blank" id="search_web" name="search_web">
			<input type="hidden" name="want" value="">
			<input size='14px' class="s_input" type="text" name="search" id="search" onmouseover="this.focus()" autocomplete="off"><input  type="submit" class="s_btn" id="sbtn" value="搜网页"><p><input type="radio" name="engine" value="baidu" checked="">默认 <input type="radio" name="engine" value="baidugoogle">百度+谷歌<input type="radio" name="engine" value="google">谷歌<input type="radio" name="engine" value="sogou">搜狗 <input type="radio" name="engine" value="bing">必应 <input type="radio" name="engine" value="yodao">有道 <input type="radio" name="engine" value="googleen">Google </p><input type="hidden">
			</form>
			<form action="http://so.classic023.com/search.asp" method="get" target="_blank" id="search_photo" style="display:none">
			<input type="hidden" name="want" value="photo">
			<input class="s_input" type="text" value="请输入您要搜索的图片！" name="search" onmouseover="this.focus()" onblur="if (value ==''){value='请输入您要搜索的图片！'}" onfocus="this.select()" onclick="if(this.value=='请输入您要搜索的图片！')this.value=''"><input type="submit" class="s_btn" value="搜图片"><p><input type="radio" name="engine" value="sogou" checked="">搜狗 <input type="radio" name="engine" value="bing">必应 <input type="radio" name="engine" value="yodao">有道 <input type="radio" name="engine" value="iask">爱问 <input type="radio" name="engine" value="googleen">Google</p><input type="hidden">
			</form>
			<form action="http://so.classic023.com/search.asp" method="get" target="_blank" id="search_music" style="display:none">
			<input type="hidden" name="want" value="music">
			<input class="s_input" type="text" value="请输入歌曲名、歌手名或歌词中的一部分！" name="search" onmouseover="this.focus()" onblur="if (value ==''){value='请输入歌曲名、歌手名或歌词中的一部分！'}" onfocus="this.select()" onclick="if(this.value=='请输入歌曲名、歌手名或歌词中的一部分！')this.value=''"><input type="submit" class="s_btn" value="搜音乐"><p><input type="radio" name="engine" value="" checked="">默认 <input type="radio" name="engine" value="baidu">百度 <input type="radio" name="engine" value="soso">搜搜 <input type="radio" name="engine" value="sogou">搜狗<input type="radio" name="engine" value="gougougc">歌词</p><input type="hidden">
			</form>
			<form action="http://so.classic023.com/search.asp" method="get" target="_blank" id="search_video" style="display:none">
			<input type="hidden" name="want" value="video">
			<input class="s_input" type="text" value="请输入您要搜索的电影、电视或视频！" name="search" onmouseover="this.focus()" onblur="if (value ==''){value='请输入您要搜索的电影、电视或视频！'}" onfocus="this.select()" onclick="if(this.value=='请输入您要搜索的电影、电视或视频！')this.value=''"><input type="submit" class="s_btn" value="搜影视"><p><input type="radio" name="engine" value="" checked="">默认<input type="radio" name="engine" value="youku">优酷 <input type="radio" name="engine" value="tudou">土豆 <input type="radio" name="engine" value="gougou">狗狗 <input type="radio" name="engine" value="verycd">VeryCD</p><input type="hidden">
			</form>
			</div>
			<div id="site_web" class="site" style="display:"><p class="site_title"></p></div>
			<div id="site_photo" class="site" style="display:none"><p class="site_title"></p></div>
			<div id="site_music" class="site" style="display:none"><p class="site_title"></p></div>
			<div id="site_video" class="site" style="display:none"><p class="site_title"></p></div>
			<div id="site_game" class="site" style="display:none"><p class="site_title"></p></div>
			</div>

			<div name="chinaunix">
			<form autocomplete="off" id="searchForm" action="http://search.chinaunix.net/" target="_blank">
			<input size='14px' type="text" class="inp1" name="q" value="">
			<input type="submit" class="btn1" onclick="return c_search(this.form,0);" value="快速搜索"> <input type="submit" onclick="return c_search(this.form,1);" class="btn1" value="高级搜索">
			<a href="http://bbs.chinaunix.net/forum-217-1.html" title="Linux系统管理" style="" target="_blank">系统管理</a> <a href="http://bbs.chinaunix.net/forum-224-1.html" title="内核源码" style="" target="_blank">内核源码</a> <a href="http://star.chinaunix.net/" title="CU" style="color: #FF0000" target="_blank">CU</a>               
			</form></div>
			</li><li>
			5.weibo
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://weibo.com"><font p strong size=4 color="#633333">sina</font></a></td>
			<td><a  target="_blank" href="http://t.qq.com">t.qq</a></td>
			<td><a  target="_blank" href="http://web.qq.com">webqq</a></td>
			<td><a  target="_blank" href="http://renren.com">renren</a></td>
			<td><a  target="_blank" href="https://www.bdwm.net/bbs/bbslog2.php?userid=brando&passwd=zgxu2008">bbs</a></td>
			</table></li><li>
			6.tieba
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://tieba.baidu.com/f?kw=%CA%F1%C9%BD%BD%A3%BF%CD"><font p strong size=4 color="#633333">蜀山</font></a></td>
			<td><a  target="_blank" href="http://tieba.baidu.com/f?kw=%BA%FA%B8%E8">胡歌</a></td>
			<td><a  target="_blank" href="http://tieba.baidu.com/f?kw=%B8%E8%E6%CC">歌嫣</a></td>
			<td><a  target="_blank" href="http://tieba.baidu.com/f?kw=%C1%F5%D2%E0%B7%C6">亦菲</a></td>
			<td><a  target="_blank" href="http://tieba.baidu.com/p/1753284199">noi</a></td>
			</table></li><li>
			7.webpan
			<table frame="hsides" width=100% style="table-layout:fixed;" >
			<td><a  target="_blank" href="http://pan.baidu.com/netdisk/home"><font p strong size=4 color="#633333">网盘</font></a></td>
			<td><a  target="_blank" href="http://115.com/">115</a></td>
			<td><a  target="_blank" href="http://ishare.iask.sina.com.cn/">新浪共享</a></td>
			<td><a  target="_blank" href="http://wenku.baidu.com/">百度文库</a></td>
			<td><a  target="_blank" href="http://i.yunduan.cn/">cloud</a></td>
			</table></li><li>
			<font size=2>8.输入你想要察看的标签</font>
			<form action="">
			<input size='16px' type="text" id="tagname" value=""/>
			<button type="submit" onclick="window.open('http://hi.baidu.com/tag/'+tagname.value+'/feeds','newwindow');return false;">搜</button>
			<button type="submit" onclick="window.open('http://hi.baidu.com/loveu/archive/tag/'+tagname.value,'newwindow');return false;">hi</button>
			<button type="submit" onclick="window.open('http://www.ittang.com/plus/search.php?kwtype=0&keyword='+tagname.value+'','newwindow');return false;">IT</button>
			<button type="submit" onclick="window.open('https://github.com/search?type=&ref=simplesearch&q='+tagname.value+'','newwindow');return false;">git</button>
			</form>
			</li><li>
			<font size=2>9.留言板</font>
			<table id="replies" border=1>
<?php //这个是服务器主动运行的,属于php直接调用
require_once("pull.php");?><?php
$pg=isset($_REQUEST['reply_pg'])?$_REQUEST['reply_pg']:-1; $pgsize=5;?> 
			</table>
<script type="text/javascript">
function display_reply(res){ replies.innerHTML=""; for(i=0;i<res.length;i++) { newrow=replies.insertRow(replies.rows.length); newcol=newrow.insertCell(0);newcol.innerHTML=res[i][0]; newcol=newrow.insertCell(0);newcol.innerHTML=res[i][1]; }
}			  <!-- 这个是client运行的，服务器被动响应，client再处理结果和显示-->
<!--对于服务器被动经过http请求的响应，一般是php的main入口处理-->
<!--这个是客户端ajax请求的，属于php间接调用-->
function pull_reply(pg){ $.ajax({url:"pull.php",dataType:"json",data:"reply_pg="+pg+"&pgsize=5",success:function(res){display_reply(res);} }); }
</script>
<?php
$begin=$pg-5>0?$pg-5:0; $end=$pg+5; for($k=$begin;$k<$end;$k++){ ?>
				<a href="javascript:void(0);" onclick="pull_reply(<?php echo $k ?>);" ><?php echo $k?></a>
			<?php } ?>
</ul>
	</td>

	<td id='col_2' width=20% bgcolor='fafafa' border=0><!-- effeff-->
		<h3>personal</h3>
		<div><ul>
			<li>Email
				<a  target="_blank" href="http://cn.yahoo.com">yahoo</a>
				<table  frame="hsides" width=100% style="table-layout:fixed;" >
				<td>
					<form method="post" action="https://edit.bjs.yahoo.com/config/login_verify2?" target="_blank" autocomplete="" name="login_form" onsubmit="return hash2(this)">
						<input type="hidden" name=".src" value="">
						<input type="hidden" name=".tries" value="2">
							<input type="hidden" name=".done" value="http://cn.rd.yahoo.com/home/yhp0806/login/tostandby/*http://cn.yahoo.com/">
							<input type="hidden" name=".md5" value="">
							<input type="hidden" name=".hash" value="">
							<input type="hidden" name=".js" value="">
							<input type="hidden" name=".partner" value="">
							<input type="hidden" name=".slogin" value="zgxu2008@yahoo.cn">
							<input type="hidden" name=".intl" value="cn">
							<input type="hidden" name=".lang" value="zh-Hans-CN">
							<input type="hidden" name=".fUpdate" value="">
							<input type="hidden" name=".prelog" value="">
							<input type="hidden" name=".bid" value="">
							<input type="hidden" name=".aucid" value="">
							<input type="hidden" name=".yplus" value="">
							<input type="hidden" name=".chldID" value="">
							<input type="hidden" name="pkg" value="">
							<input type="hidden" name="hasMsgr" value="0">
							<input type="hidden" name=".pd" value="_ver=0&amp;c=&amp;ivt=&amp;sg=">
							<input type="hidden" name=".u" value="9qgghnd82mvjb">
							<input type="hidden" name=".persistent" value="y">
							<input type="hidden" name="pad" id="pad" value="6">
							<input type="hidden" name="aad" id="aad" value="6">
							<div id="inputs">
								<div id="username" value="zgxu2008@yahoo.cn"></div>
								<input size='19px' name="passwd" id="passwd" type="password" maxlength="30" tabindex="2"> 
								<button type="submit" id=".save" name=".save" class="primaryCta" tabindex="3">login</button>
							</div>
						</form>
					</td>
					<td><a  target="_blank" href="http://en.cppreference.com/w/cpp">gmail</a></td>
				</table>
				</li><li>
				<div>
					my plan<br/>
					<font size=4px>
						<a href="http://net.pku.edu.cn/~wbia/2012Fall/project1.html" target="_blank">wbia</a> 
						<a href="http://www.cnblogs.com/god_bless_you/archive/2012/09/24/2700075.html" target="_blank">lemur</a>
						<a href="http://wenku.baidu.com/view/c9f61f1e650e52ea551898b2.html" target="_blank">lemur</a>
						<a href="http://hi.baidu.com/loveu/item/53ecb446343fc0ad60d7b9a4" target="_blank">刷poj</a>
						<a href="http://hi.baidu.com/loveu/item/f6a3ba5fdce8870fe7c4a5f8"target="_blank">刷hdu</a>
						<a href="http://hi.baidu.com/loveu/item/b5be149054a7be4df0421537" target="_blank">js</a>
						<a href="http://dapractise.openjudge.cn/" target="_blank">data structure</a>
				</font>
				</div></li><li>
				<div>
					books or topics online<br/>
					<font size="4px">
						<a  target="_blank" href="http://crypto.stanford.edu/ibe/">ibe</a>
						<a  target="_blank" href="https://class.coursera.org/ml/auth/welcome?type=logout&visiting=%2Fml%2Flecture%2Findex">machine learning</a>
						<a  target="_blank" href="http://hyry.dip.jp/tech/book/page/scipy/numpy_index_access.html">python</a>
						<a  target="_blank" href="http://www.timelydevelopment.com/demos/NetflixPrize.aspx">nprize</a>
						<a  target="_blank" href="http://www.ietf.org/rfc/">rfc</a>
						<a  target="_blank" href="http://vbird.dic.ksu.edu.tw/">php</a>
						<a  target="_blank" href="http://topic.it168.com/factory/junsansi/">涂抹oracle</a>
						<a  target="_blank" href="http://blog.51yip.com/linux/1262.html">php设</a>
						<a  target="_blank" href="http://hi.baidu.com/liu_bin0101/blog/item/f100fc73b35ae5148601b0e1.html">vim快捷键</a>
						<a  target="_blank" href="http://hi.baidu.com/loveu/item/52b8451020c77cfeddeecaf3">--</a>
						<a  target="_blank" href="http://blog.csdn.net/xiao_qiang_/article/details/3006801">python标准库</a>
						<a  target="_blank" href="python_standard_lib.html">local版本</a>
						<a  target="_blank" href="http://book.chaoxing.com/ebook/read_12183770.html">编译原理</a>
						<a  target="_blank" href="http://ehash.iaik.tugraz.at/wiki/The_SHA-3_Zoo">sha 源码</a>
						<a  target="_blank" href="http://book.chaoxing.com/ebook/read_10098359.html">离散数学 </a><a target="_blank" href="http://bbezxcy.iteye.com/category/201858">图论专区</a>
				</font>
				</div></li><li>
				<div>
					links of IT online<br/>
					<font size="4px">
						<a  target="_blank" href="">ubuntu</a>
						<a  target="_blank" href="http://mirror.bjtu.edu.cn/cn/">bjtu-mirror</a>
						<a  target="_blank" href="http://www.chinaunix.net/">chinaunix</a>
						<a  target="_blank" href="http://www.csdn.net/">csdn</a>
						<a  target="_blank" href="http://www.pudn.com/">pudn</a>
						<a  target="_blank" href="http://www.programlife.net/">programlife</a>
							<a  target="_blank" href="http://xingfinal.blog.163.com/blog/#m=0">linuxer</a>
							<a  target="_blank" href="http://www.cnblogs.com/rainydays/">acmer</a>
							<a  target="_blank" href="http://blog.csdn.net/abchcd/article/list/1">jober</a>
							<a  target="_blank" href="http://software.pku.edu.cn:8080/pkuSoftLegal/student/rjjh.htm">free software</a>
					</font>
					</div></li>
					<li>
						<h6> 备用链接 </h6>
						<form id="push_url_form" name="push_url_form" method="post" action="push.php">
							<label><font size="2" p strong>链接名称</font></label><input size='10px' name="link_name" value="link name"  onclick="this.value=''"/><br/>
							<label><font size="2" p strong>链接内容</font></label><input size='10px' name="link_value" value=""  onclick="this.value=''"/><br/>
						</form>
						<button onclick="push_urls(push_url_form.link_name.value,push_url_form.link_value.value);">添加</button>
						<button type="ff" id="dd" name="dd" onclick="del_urls();return;">清空</button>
						<script>s=true;function display_urls(){ if(s) {s=false;pull_urls();} else pull_urls_div();}</script>
						<button type="ff" id="dd" name="dd" onclick="display_urls();return;">显示</button>
				</li>
		</ul>
		</div>
		<div>
			<ul style="display: inline-block; overflow: hidden; font-size: 12px; font-weight: bold; word-wrap: break-word;">
			<li><img  src="http://tp3.sinaimg.cn/2635728142/180/22831012745/1" width="150" height="145" alt="请叫我老xu"></li>
			<li><dd style="display:inline-block ; overflow: hidden; font-size: 12px; font-weight: bold; word-wrap: break-word;"> <a href="" target="_blank" title="真是个好公民"><font  color='feeeef'>叫 我 老 徐</font></a>
			</dd></li>
			<li ><a target="_blank" href="" ><strong node-type="follow"><font font-family='华文行凯'> 今日事今日</font></strong><span>毕</span></a></li>
			</ul>  
		</div>

	</td>

	<td id='col_3' width=43% bgcolor='#fafafa'> <!--efffff-->
		<div>
			<h2>ALGORITHM</h2>
			<ul><li>
				在线评测平台
				<table frame="hsides" width=100% style="table-layout:fixed;" >
					<td><a  target="_blank" href="http://www.lydsy.com/JudgeOnline/">bzoj</a></td>
					<td><a  target="_blank" href="http://poj.org">poj</a></td>
					<td><a  target="_blank" href="http://judge.noi.cn/problemlist">NOIs</a></td>
					<td><a  target="_blank" href="http://poj.grids.cn/">pjo</a></td>
					<td><a  target="_blank" href="http://acm.hdu.edu.cn/">hdu</a></td>
					<td><a  target="_blank" href="http://acm.csu.edu.cn/OnlineJudge/">csu-answer</a></td>
					<td><a  target="_blank" href="http://acm.zju.edu.cn/onlinejudge/">zoj</a></td>
					<td><a  target="_blank" href="http://www.codeforces.com/problemset">codeforce</a></td>
					<td><a  target="_blank" href="http://www.tyvj.cn/">zvvj</a></td>
					<td><a  target="_blank" href="http://acm.timus.ru/">ural</a></td>
					<td><a  target="_blank" href=http://www.spoj.pl/">spoj</a></td>
				</table>
				</li><li>
				oier博客
				<table  frame="hsides" width=100% style="table-layout:fixed;" ><tr>
						<td><a  target="_blank" href="/wjbzbmr/blog">CLJ</a></td>
						<td><a  target="_blank" href="/中国脑筋/blog">7k+顾昱洲(GYZ/ym)</a></td>
						<td><a  target="_blank" href="/oimaster/blog">oimaster(JZP)</a></td>
						<td><a  target="_blank" href="/coolinging/blog">coolinging</a></td>
						<td><a  target="_blank" href="/http://hi.baidu.com/new/billdu">applepi杜宇飞(dyf)</a></td>
						<td><a  target="_blank" href="/mikeni2006/blog">nzk</a></td>
						<td><a  target="_blank" href="/coolypf/blog">coolypf</a></td>
						<td><a  target="_blank" href="http://fanhq666.blog.163.com/">FHQ</a></td>
						</tr><tr>
						<td><a  target="_blank" href="http://hi.baidu.com/zradiance/home">毕克</a></td>
						<td><a  target="_blank" href="/lydrainbowcat/blog">lyd(李煜东)</a></td>
						<td><a  target="_blank" href="http://hi.baidu.com/new/wwwaaannngggrs">kac</a></td>
						<td><a  target="_blank" href="http://hi.baidu.com/new/huyuanming11">hym</a></td>
						<td><a  target="_blank" href="http://hi.baidu.com/cao_ximeng/blog">cxm</a></td>
						<td><a  target="_blank" href="http://hi.baidu.com/roofalison/blog/category/%C8%ED%BC%FE%C9%E8%BC%C6">root</a></td>
						<td><a  target="_blank" href="http://hi.baidu.com/new/dextrom">dextrom</a></td>
						</tr><tr>
						<td><a target="_blank" href="http://blog.csdn.net/jxy859/article/category/1107773">jxy859(hdu)</a></td>
						<td><a target="_blank" href="http://blog.csdn.net/roosephu">lyp神牛</a></td>
						<td><a target="_blank" href="http://blog.csdn.net/huyuncong">hyc图论王子</a></td>
						<td><a target="_blank" href="http://blog.sina.com.cn/u/2014505350">idl</a></td>
						<td><a target="_blank" href="http://blog.csdn.net/cjoilmd">lmd</a></td>
						<td><a target="_blank" href="http://blog.csdn.net/woshitanwei">tw</a></td>
						<td><a target="_blank" href="http://www.dxmtb.com/blog/">小哈</a></td>
					</tr>
				</table>
				</li><li>
					<font size=5 strong black><a href="pull.php?pull_url=1" target="_blank">your links</a></font>
					<font size=1 face="arial" color="green" align='center'>
					<div name="other_links_div" id="other_links_div" width="500px">
					</div>
					<table name="other_links" id="other_links" width="340px" align='center'>
	<script type="text/javascript">
	//	pull_urls();
	pull_urls_div();
			</script>
					</table></font>
				</li><li>
				基础库
				<table  frame="hsides" width=100% style="table-layout:fixed;" >
					<td><a  target="_blank" href="http://en.cppreference.com/w/cpp">STL</a></td>
					<td><a  target="_blank" href="http://php.net/manual/en/function.sha1.php">php</a></td>
					<td><a  target="_blank" href="http://www.cplusplus.com/reference/cstdio/">c++</a></td>
					<td><a  target="_blank" href="http://www.w3school.com.cn/">W3C</a></td>
					<td><a  target="_blank" href="http://localhost/python_standard_lib.html">python lib</a></td>
					<td><a  target="_blank" href="http://wiki.ubuntu.org.cn/Shell%E7%BC%96%E7%A8%8B%E5%9F%BA%E7%A1%80">shell</a></td>
				</table>
				</li><li>
				算法资料
				<table  frame="hsides" width=100% style="table-layout:fixed;" >
					<td><a  target="_blank" href="http://acmicpc.info/archives/category/%E7%AE%97%E6%B3%95%E7%AB%9E%E8%B5%9B/icpc/icpc-2012-%E4%BA%9A%E6%B4%B2%E5%8C%BA">acm/icpc题解</a></td>
					<td><a  target="_blank" href="http://pan.baidu.com/disk/home#dir/path=%2FDocuments%2F%E7%AB%9E%E8%B5%9B%E8%AE%BA%E6%96%87">集训队论文</a></td>
					<td><a  target="_blank" href="http://pan.baidu.com/disk/home#dir/path=%2FDocuments%2F%E7%AB%9E%E8%B5%9B%E4%B9%A6%E7%B1%8D">集训队书籍</a></td>
					<td><a  target="_blank" href="http://tieba.baidu.com/p/1217076472">noi_tieba</a></td>
					<td><a  target="_blank" href="http://www.oifans.cn/oibook">noi知识库</a></td>
				</table>
				</li><li>
				代码
				<table  frame="hsides" width=100% style="table-layout:fixed;" >
					<td><a  target="_blank" href="http://my.csdn.net/my/code">csdn_code</a></td>
					<td><a  target="_blank" href="http://pan.baidu.com/disk/home#dir/path=%2FDocuments%2Foj%E6%BA%90%E7%A0%81">XOJ_code</a></td>
						<td><a  target="_blank" href="http://blog.csdn.net/coolypf/article/details/7832827">五子棋</a></td>
						<td><a  target="_blank" href="http://blog.csdn.net/coolypf/article/details/7832795">角斗士</a></td>
						<td><a  target="_blank" href="http://blog.csdn.net/coolypf/article/details/7832754">数独</a></td>
						<td><a  target="_blank" href="http://code.google.com/hosting/">googlecode</a></td>
						<td><a  target="_blank" href="http://www.codesoso.net/default.aspx">codesoso</a></td>
						<td><a  target="_blank" href="http://www.codeforge.cn/"><strong>codeforge</strong></a></td>
				</table>
				</li></ul>
			</div>

			<div class=td_content>PROJECTS
				<ul><li>
						<a  target="_blank" href="https://github.com/alibaba/canal">canal</a>
						<a  target="_blank" href="http://i.pku.edu.cn/renrenplugin">renrenp</a>
						<a  target="_blank" href="http://astar.baidu.com/index.php?mod=cms&act=gy_detail&id=18">ypf</a>
						<a  target="_blank" href="http://ftp3.ie.freebsd.org/pub/">oschina</a>
						<a  target="_blank" href="http://www.csdn.net/article/2011-08-11/302961">crazy web</a>
						<a  target="_blank" href="https://code.google.com/p/mrrm/">ypf_mrrm...</a>
					</li>
				</ul>
		</div>
	</td>

	<td id='col_4'width='21%' border='hidden' bgcolor='fafafa' align='center'border=0>
		 <strong> music time</strong><br>
			<embed id='music_box' src="http://www.xiami.com/widget/1588651_2452_190_316_F1F1F1_fafafa_0/artisthotPlayer.swf" type="application/x-shockwave-flash" width="190" height="316" wmode="opaque"></embed>
			<br/><br/><br/>
			<embed id='music_box' src="http://www.xiami.com/widget/1588651_17575258_190_316_f1f1f1_fafafa_0/collectPlayer.swf" type="application/x-shockwave-flash" width="190" height="316" wmode="opaque"></embed>

	</td>
	</tr>
</table>
<!-- the end of file -->

<div  style="Z-INDEX:-1;POSITION:absolute;WIDTH:0px;TOP:10px;LEFT:0px">
</div>
</div>
</div>
<!-- <div id='footer'></div> -->
</html>
