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
    //选择主题，从start个开始
    }else if($ACTION=="getThreads"&&isset($PN)){
      $num=($PN-1)*50;
      $DB->query("select * from thread_details order by timestamp ".
      " limit ".$num.",50");
      $THREADLIST=$DB->get_rows_array();
   } 
?>
      
