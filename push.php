<?php
//注意：php的string连接符号为. js的连接符号是+，写错了会让php直接忽略掉+之前和之后的引号内的东西。
//注意：是$_REQUEST['..']不是$POST['..']，各种变量如果写错了就是空值，很难查出错误。
//注意：php的变量要加$，js不加。php写掉$了会读不出来。
require_once("db.php");
function upload($linkname,$linkvalue){
	$db=new mydb;
	$db->connect();
	return $db->query("insert into my_db.urls(linkname,linkvalue) values('$linkname','$linkvalue');");
}
function handle_clear(){
	$db=new mydb;
	$db->connect();
	return $db->query("delete from my_db.urls where 1=1;");
}
function handle_del(){
	$db=new mydb;
	$db->connect();
	if(isset($_REQUEST['link_id'])){
		$linkid=$_REQUEST['link_id'];
		if(($db->query("insert into my_db.del_urls select * from my_db.urls where linkid=".$linkid.";"))==1)
			if(($res=$db->query("delete from my_db.urls where linkid=".$linkid.";"))==1)
				return "delete url ".$linkid." successfully";
			else return $res;
	}
	else return "link_id not set";
}
function handle_push(){
	if(isset($_REQUEST['link_name'])&&isset($_REQUEST['link_value'])){
		$linkname=$_REQUEST['link_name'];
		$linkvalue=$_REQUEST['link_value'];
		if($linkname!=""&&$linkvalue!=""){
			if(($res=upload($linkname,$linkvalue))==1) 
				return "upload ".$linkname.":".$linkvalue." succeessfully";
			else return $res;
		}
	}
	return "link_name or link_value not set";
}

if(isset($_REQUEST['clear'])&&$_REQUEST['clear']==1){
	echo handle_clear();
	return;
}
if(isset($_REQUEST['del_url'])&&$_REQUEST['del_url']==1){
	echo handle_del();
	return;
}
echo handle_push();
?>

