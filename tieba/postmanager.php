<?php
if(!isset($DB)){
  echo "no db";
  return;
}
//增删改查
if($ACTION=="getPosts"&&isset($PN)&&isset($TID)){
  $num=($PN-1)*30;
  $sql="select * from posts,threads where ".
    " posts.postid=threads.postid and threads.tid=".$TID.
    " order by posts.timestamp limit ".$num.",30 ";
  $DB->query($sql);
  $POSTLIST=$DB->get_rows_array();
  $sql="select * from thread_details where tid=".$TID;
  $DB->query($sql);
  $tmp=$DB->get_rows_array();
  $THREAD=$tmp[0];
  foreach($POSTLIST as $i =>$tmp){
    $sql="select * from lzls where postid=".$tmp['postid'];
    $DB->query($sql);
    $lzls=$DB->get_rows_array();
    $POSTLIST[$i]['lzl']=$lzls;
  }
//  echo "<pre>";
//  var_dump($POSTLIST,true);
//  echo "</pre>";
  //选择主题，从start个开始
}else if($ACTION=="getThreads"&&isset($PN)){
  $num=($PN-1)*50;
  $DB->query("select * from thread_details order by timestamp desc".
      " limit ".$num.",50");
  $THREADLIST=$DB->get_rows_array();
} 
?>

