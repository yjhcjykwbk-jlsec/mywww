<?php
//注意：php的string连接符号为. js的连接符号是+，写错了会让php直接忽略掉+之前和之后的引号内的东西。
//注意：是$_REQUEST['..']不是$POST['..']，各种变量如果写错了就是空值，很难查出错误。
//注意：php的变量要加$，js不加。php写掉$了会读不出来。
require_once("db.php");
function _addUrl($linkname,$linkvalue,$linktags){
	$db=new mydb;
	$db->connect();
	return $db->query("insert into my_db.urls
		(linkname,linkvalue,tags) values('$linkname','$linkvalue','$linktags');",true);
}
function _setUrl($linkid,$linkname,$linkvalue,$linktags){
	$db=new mydb;
	$db->connect();
	$sql="update my_db.urls set ".
		"linkname='$linkname',linkvalue='$linkvalue',tags='$linktags' where linkid='$linkid'";
	return $sql.":".$db->query($sql,true);
}
function clearUrl(){
	$db=new mydb;
	$db->connect();
	return $db->query("delete from my_db.urls where 1=1;");
}
function delUrl(){
	$db=new mydb;
	$db->connect();
	if(isset($_REQUEST['link_id'])){
		$linkid=$_REQUEST['link_id'];
		if(($db->query("insert into my_db.del_urls select * from my_db.urls where linkid=".$linkid.";",true))==1){
			if(($res=$db->query("delete from my_db.urls where linkid=".$linkid.";",true))==1)
				echo("delete url ".$linkid." successfully");
			else {
				echo("delete from urls failed");
			}
		}
		else echo("insert into del_urls failed");
	}
	else echo("link_id not set");
}
function addUrl(){
	if(isset($_REQUEST['link_name'])&&isset($_REQUEST['link_value'])){
		$linkname=$_REQUEST['link_name'];
		$linkvalue=$_REQUEST['link_value'];
		$linktags=isset($_REQUEST['link_tags'])?$_REQUEST['link_tags']:"";
		if($linkname!=""&&$linkvalue!=""){
			if(($res=_addUrl($linkname,$linkvalue,$linktags))==1) 
				return "upload ".$linkname.":".$linkvalue." succeessfully";
			else return $res;
		}
	}
	return "link_name or link_value not set";
}
//set url 
function setUrl(){
	echo "seturl";
	if(isset($_REQUEST['link_id'])){
		$linkid=$_REQUEST['link_id'];
		$linkname=$_REQUEST['link_name']?$_REQUEST['link_name']:"";
		$linkvalue=$_REQUEST['link_value']?$_REQUEST['link_value']:"";
		$linktags=isset($_REQUEST['link_tags'])?$_REQUEST['link_tags']:"";
		if(($res=_setUrl($linkid,$linkname,$linkvalue,$linktags))==1) 
			return "success";
	}
	return "fail";
}
function delTag(){
	if(!isset($_REQUEST['tag'])) {
		echo "tag not set";
		return;
	}
	$tag=$_REQUEST['tag'];
	$db=new mydb;
	$db->connect();
	$db->query("select * from my_db.urls;");
	$res=$db->get_rows_array();
	$sql="";
	foreach($res as $i=>$row){
		$tags=$row[3]?$row[3]:"";
		$tagsArr=split(',',$tags);
		$t=array_search($tag,$tagsArr);
		if($t||$t===0){
			array_splice($tagsArr,$t,1);//remove the t element
			$row[3]=$tags=implode(',',$tagsArr);
			$sql="update my_db.urls set tags='$tags' where linkid='$row[0]';\n";
			$db->query($sql,true);
		}
	}
	//after change
	$db->query("select * from my_db.urls;");
	$res=$db->get_rows_array();
	echo "<pre>";
	print_r($res);
	echo "</pre>";
}

function main(){
	$action=$_REQUEST['action']?$_REQUEST['action']:"";
	if($action=="clearUrl"){
		echo clearUrl();
		return;
	}
	else if($action=="delUrl"){
		echo delUrl();
		return;
	}
	else if($action=="setUrl"){
		echo setUrl();
		return;
	}
	else if($action=="delTag"){
		echo delTag();
		return;
	}
	else if($action=="addUrl") 
		echo addUrl();
}
main();
?>

