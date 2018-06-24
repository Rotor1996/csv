<?php
	header("Content-type: text/html; charset=utf-8");
	//导入CSV
	$fp=fopen('user.csv', r);
	while (($row=fgetcsv($fp))!==FALSE) {
		//从文件指针中读入一行并解析CSV
		$arr[]=$row;
	}
	fclose($fp);
	// var_dump($arr);
	//连接数据库
	require ('connect.php');
	//定义邮箱验证正则表达式
	$checkmail="/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";
	foreach ($arr as $row) {
		//姓氏、名称转换为大写
		$surname=$row[0];
		$name=$row[1];
		$email=$row[2];
		$surname=strtoupper($surname);
		$name=strtoupper($name);
		//邮箱转换为小写
		$email=strtolower($email);
		//判断邮箱是否有效
	if (preg_match($checkmail, $email)) {
		$sql="INSERT INTO user(surname,name,email)VALUES('".$surname."','".$name."','".$email."')";
		echo "sql:"."\n";
		var_dump($sql);
		
	}else{
	 	echo $surname.$email." error email "."\n";
	}
	//dry_run 不存入数据库将此段代码注释掉即可
	// $res=mysql_query($sql,$conn);
}