<?php  //注意下面的“间接调用”和“直接调用”两种入口
require_once("db.php");
//返回tags
function pullTags(){
	$db=new mydb;
	$db->connect();
	$db->query("select tags from my_db.urls;");
	$res=$db->get_rows_array();
	$temp=array();
	foreach($res as $row){
		$tags=$row[0]?$row[0]:"";
		$tagsArr=split(',',$tags);
		$temp=array_merge($temp,$tagsArr);
	}
	$temp=array_unique($temp);
	return $temp;
}
//返回url
function pullUrl($id){
	$db=new mydb;
	$db->connect();
	$db->query("select * from my_db.urls where linkid=$id;");
	$res=$db->get_rows_array();
	return $res;
}
//返回urls
function pullUrls($tag){
	$db=new mydb;
	$db->connect();
	$db->query("select * from my_db.urls;");
	$res=$db->get_rows_array();
	if($tag!="")
	{
		$temp=array();
		foreach($res as $row){
			$tags=$row[3]?$row[3]:"";
			$tagsArr=split(',',$tags);
			if(array_search($tag,$tagsArr)!==NULL){
				$temp[]=$row;
			}
		}
		return $temp;
	}	
	else	return $res;
}
// //返回留言
// function pull_pull1($pg,$pgsize){
	// $db=new mydb;
	// $db->connect();
	// $begin=$pg*$pgsize;
	// $db->query("select * from my_db.replies limit ".$begin.",".$pgsize.";");
	// return $db->get_rows_array();//非main入口只能够由php脚本直接调用，一般返回php中间变量
// }
///main
function main(){
	//main 1
	//main是可以直接通过ajax/http请求间接调用的入口,一般返回json字符串
	$action=$_REQUEST['action']?$_REQUEST['action']:"";
	if($action=='pullTag'){
		$res=pullTags();
		echo json_encode($res);
	}
	else if($action=='pullUrl'){
		$tag=isset($_REQUEST['tag'])?$_REQUEST['tag']:"";
		$res=pullUrls($tag);
		echo  json_encode($res);
	}
	else if($action=='editUrl'){
		$id=isset($_REQUEST['link_id'])?$_REQUEST['link_id']:"";
		$res=pullUrl($id);
		return $res;
	}
	// else if($action=='reply_pg'){
		// $res=pull_pull1($_REQUEST['reply_pg'],$_REQUEST['pgsize']);
		// echo  json_encode($res);
	// }
}
main();
?>
