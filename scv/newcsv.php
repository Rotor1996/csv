<?php
// 头部标题
$csv_header = ['名称','姓氏','电子邮件'];
// 内容
$csv_body = [
 ['张三','zhang','123456@qq.com'],
 ['李四','LI','1125547@qq@qq'],
 ['王五','wang','12354884'],
 ['赵六','zhao','123321.com']
];
 
/**
 * 开始生成
 * 1. 首先将数组拆分成以逗号（注意需要英文）分割的字符串
 * 2. 然后加上每行的换行符号，这里建议直接使用PHP的预定义
 * 常量PHP_EOL
 * 3. 最后写入文件
 */
// 打开文件资源，不存在则创建
$fp = fopen('user.csv','a');
// 处理头部标题
$header = implode(',', $csv_header) . PHP_EOL;
// 处理内容
$content = '';
foreach ($csv_body as $k => $v) {
 $content .= implode(',', $v) . PHP_EOL;
}
// 拼接
$csv = $header.$content;
// 写入并关闭资源
fwrite($fp, $csv);
fclose($fp);