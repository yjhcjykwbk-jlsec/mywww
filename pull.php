<?php  //注意下面的“间接调用”和“直接调用”两种入口
require_once("db.php");
function handle_pull(){
	$db=new mydb;
	$db->connect();
	$db->query("select * from my_db.urls;");
	return $db->get_rows_array();
}
function handle_pull1($pg,$pgsize){//返回留言
	$db=new mydb;
	$db->connect();
	$begin=$pg*$pgsize;
	$db->query("select * from my_db.replies limit ".$begin.",".$pgsize.";");
	return $db->get_rows_array();//非main入口只能够由php脚本直接调用，一般返回php中间变量
}
//main 1
//main是可以直接通过ajax/http请求间接调用的入口,一般返回json字符串
if(isset($_REQUEST['pull_url'])){
	$res=handle_pull();
	echo  json_encode($res);
}
else if(isset($_REQUEST['reply_pg'])&&isset($_REQUEST['pgsize'])){
	$res=handle_pull1($_REQUEST['reply_pg'],$_REQUEST['pgsize']);
	echo  json_encode($res);
}
?>
