<?php
$conn=mysql_connect('localhost','root','123456') or die('链接数据库失败');
//选择数据库
mysql_select_db('db_user') or die('选择数据库失败');
//数据库编码
mysql_query('set names utf8');