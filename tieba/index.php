<?php
  function cmp($a,$b){return isset($a)&&isset($b)&&strcmp($a,$b)==0;}
  $_ENV=$_REQUEST;
  print_r($_ENV);
  if(isset($_ENV['mod'])){
    $MOD=$_ENV['mod'];
    if(cmp($MOD,"threads")) {//帖子列表
      require "threadlist.php";
    }else if(cmp($MOD,'posts')){//
      require "postlist.php";
    }else {
      echo "error request";
    }
  }
?>
