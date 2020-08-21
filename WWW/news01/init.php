<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include_once("functions/database.php");
get_connection();
mysql_query("insert into category values(null,'娱乐')");
mysql_query("insert into category values(null,'财经')");
$password = md5(md5("admin"));
mysql_query("insert into users values(null,'admin','$password')");
close_connection();
echo "成功添加初始化数据";

?>
</body>
</html>