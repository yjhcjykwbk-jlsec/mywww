<?php
//注意：php的string连接符号为. js的连接符号是+，写错了会让php直接忽略掉+之前和之后的引号内的东西。
//注意：是$_REQUEST['..']不是$POST['..']，各种变量如果写错了就是空值，很难查出错误。
//注意：php的变量要加$，js不加。php写掉$了会读不出来。
require_once("db.php");
function upload($linkname,$linkvalue,$linktags){
	$db=new mydb;
	$db->connect();
	return $db->query("insert into my_db.urls
		(linkname,linkvalue,tags) values('$linkname','$linkvalue','$linktags');");
}
function handleClear(){
	$db=new mydb;
	$db->connect();
	return $db->query("delete from my_db.urls where 1=1;");
}
function handleDel(){
	$db=new mydb;
	$db->connect();
	if(isset($_REQUEST['link_id'])){
		$linkid=$_REQUEST['link_id'];
		if(($db->query("insert into my_db.del_urls select * from my_db.urls where linkid=".$linkid.";"))==1){
			if(($res=$db->query("delete from my_db.urls where linkid=".$linkid.";"))==1)
				echo("delete url ".$linkid." successfully");
			else {
				echo("delete from urls failed");
			}
		}
		else echo("insert into del_urls failed");
	}
	else echo("link_id not set");
}
function handlePush(){
	if(isset($_REQUEST['link_name'])&&isset($_REQUEST['link_value'])){
		$linkname=$_REQUEST['link_name'];
		$linkvalue=$_REQUEST['link_value'];
		$linktags=isset($_REQUEST['link_tags'])?$_REQUEST['link_tags']:"";
		if($linkname!=""&&$linkvalue!=""){
			if(($res=upload($linkname,$linkvalue,$linktags))==1) 
				return "upload ".$linkname.":".$linkvalue." succeessfully";
			else return $res;
		}
	}
	return "link_name or link_value not set";
}
function main(){
	$action=$_REQUEST['action']?$_REQUEST['action']:"";
	if($action=="clearUrl"){
		echo handleClear();
		return;
	}
	if($action=="delUrl"){
		echo handleDel();
		return;
	}
	else echo handlePush();
}
main();
?>

