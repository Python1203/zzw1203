<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="news_save.php" method="post" enctype="multipart/form-data">
标题：   <input type="text" size="60" name="title" > <br />
内容：   <textarea cols="60" rows="16" name="content" > </textarea> <br />
类别：
<select name="category_id" size="1">
<?php
include_once("functions/database.php");
get_connection();
$result_set = mysql_query("select * from category");
close_connection();
while($row = mysql_fetch_array($result_set)){
?>
    <option value="<?php echo $row['category_id'];?>"><?php echo $row['name'];?>
</option>
<?php
}
?>
</select><br/>
附件:   <input type="file" name="news_file" size="50">
<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
<br/>
<input type="submit" value="提交"> <input type="reset" value="重置">
</form>

</body>
</html>