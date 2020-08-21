<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎访问新闻发布系统!</title>
<link rel="stylesheet" href="css/news.css" type="text/css">
</head>

<body>
<div id="container">
    <div id="header">
    <div id="menu">
         <ul>
         <li><a href="index.php?url=news_list.php">首页</a></li>
         <li class="menudiv"></li>
         <li><a href="index.php?url=review_list.php">评论浏览</a></li>
         <li class="menudiv"></li>
         <li><a href="index.php?url=category_list.php">分类浏览</a></li>
         <li class="menudiv"></li>
         <li><a href="index.php?url=news_add.php">新闻发布</a></li>
         <li class="menudiv"></li>
         <li><a href="index.php?url=category_add.php">添加分类</a></li>
         <li class="menudiv"></li>
         <li><a href="" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://<?php echo $_SEVER['HTTP_HOST']?>/news');"">设为首页</a></li>
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
     <br />
}      </div>
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
