<?php
	header("Content-type: text/html; charset=utf-8");
	//导入CSV
	$fp=fopen('test.csv', r);
	while (($row=fgetcsv($fp))!==FALSE) {
		//从文件指针中读入一行并解析CSV
		$arr[]=$row;
	}
	fclose($fp);
	// var_export($arr);
require ('connect.php');//连接数据库
$checkmail="/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";//定义邮箱验证正则表达式
foreach ($arr as $row) {
	var_dump($mail);
	if (preg_match($checkmail, $mail)) {
		$sql="INSERT INTO user(surname,name,email) VALUES ('".$row[0]."','".$row[1]."','".$row[2]."')";
	}else{
		echo "邮箱格式不正确";
	}
	$res=mysql_query($sql,$conn);
}