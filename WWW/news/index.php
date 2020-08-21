<?php
if(!isset($_GET['set'])){
	setcookie('test','test');
	$url = 'http://';
	$url.= $_SERVER['HTTP_HOST'];
	$url.= $_SERVER['PHP_SELF'];
	$url.= '?set=yes';
	header('Location:'.$url);
}else{
	if(empty($_COOKIE['test'])){
		echo "浏览器关闭了Cookie！请开启浏览器Cookie后再访问本网站！";
		return;
	}
}
?>
<html> 
<head> 
<title> 
欢迎访问新闻发布系统！ 
</title> 
<link rel="stylesheet" href="css/news.css" type="text/css"> 
</head> 
<body> 
<div id="container"> 
     <div id="header"> 
     		<div id="menu"> 
     			<ul> 
     			<li><a href="news_list.php">首页</a></li> 
     			<li class="menudiv"></li> 
     			<li><a href="review_list.php">评论浏览</a></li> 
     			<li class="menudiv"></li> 
     			<li><a href="category_list.php">分类浏览</a></li> 
     			<li class="menudiv"></li> 
     			<li><a href="news_add.php">新闻发布</a></li> 
     			<li class="menudiv"></li> 
     			<li><a href="category_add.php">添加分类</a></li> 
     			<li class="menudiv"></li> 
     			<li><a href="" onClick="this.style.behavior='url(#default#homepage)';this. setHomePage('http://<?php echo $_SERVER['HTTP_HOST']?>/news');">设为首页</a></li>
     			</ul> 
     		</div> 
     		<div id="banner"> 
     		</div> 
     </div> 
     <div id="pagebody"> 
     		<div id="sidebar"> 
     			<div id="login"> 
     				<br> 
     				<?php 
     				include_once("login.php"); 
     				?> 
     			</div> 
     		</div> 
     		<div id="mainbody"> 
     			<div id="mainfunction"> 
     				<br> 
     				<?php 
     					if(isset($_GET["url"])){ 
     						$url = $_GET["url"]; 
     					}else{ 
     						$url = "news_list.php"; 
     					} 
     					include_once($url); 
     				?> 
     			</div> 
     		</div> 
     		<div style="clear:both;"> 
     		</div> 
     </div> 
     <div id="footer"> 
     		<a href="">系统简介</a> 
     		<a href="">联系方法</a> 
     		<a href="">相关法律</a> 
     		<a href="">举报违法信息</a> 
     		<br><br>公司版权所有 
     </div> 
</div> 
</body> 
</html> 
<script> 
var sidebarHeight = document.getElementById("sidebar").clientHeight; 
var mainbodyHeight = document.getElementById("mainbody").clientHeight; 
if(sidebarHeight<500&&mainbodyHeight<500){ 
     document.getElementById("sidebar").style.height="500px"; 
     document.getElementById("mainbody").style.height="500px"; 
}else{ 
     if(sidebarHeight<mainbodyHeight){ 
     		document.getElementById("sidebar").style.height=mainbodyHeight+"px"; 
     }else{ 


     		document.getElementById("mainbody").style.height=sidebarHeight+"px"; 
     } 
} 
</script> 