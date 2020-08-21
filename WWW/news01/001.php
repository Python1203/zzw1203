<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include_once("functions/database.php")
if(isset($_GET["message"])){
	echo $_GET["message"]."<br/>";
}
$search_sql = "select * from news order by news_id desc";
$keyword = "";
if(isset)

?>

</body>
</html>