<?php
	$count=0;//初始化
	//开始循环
	for($i=1;$i<=100;$i++){
		$count++;
		//假设数字被3被5整除
		if (($count%3&&$count%5)==0) {
			if (($count%5)==0) {
				if (($count%3)==0) {
					echo "triplefiver"."\n";
				}else{
					echo "five"."\n";
				}
			}else{
				echo "triple"."\n";
			}
		}else{
		echo $count."\n";
			}
	}
//其实这个写法可能更优
/*if($count%3==0 && $count%5==0){
echo "triplefiver"."\n";
}
if($count%5==0){
echo "triple"."\n";
}
if($count%3==0 ){
echo "fiver"."\n";
}
echo "$count"*/
	
