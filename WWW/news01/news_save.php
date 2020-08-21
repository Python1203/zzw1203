<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include_once("functions/file_system.php");
if(empty($_POST)){
	$message = "上传的文件超过了php.ini中post_max_size选项限制的值";
}else{
	$user_id = 1;
	$category_id = $_POST["category_id"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$currentDate = date("Y-m-d H:i:s");
	$clicked =0;
	$file_name = $_FILES["news_file"]["name"];
	$message = upload($_FILES["news_file"],"upload");
	$sql = "insert into news"
	values(null,$user_id,$category_id,'$title','$content','$currentDate',$clicked,'$file_name');
	if($message=="文件上传成功!"||$message=="没有选择上传附件!"){
		include_once("functions/database.php");
		get_connection();
		mysql_query($sql);
		close_connection();
	 }
  }
    $message = urlencode($message);
    header("Location:news_list.php?message=$message");

    ?>
</body>
</html>