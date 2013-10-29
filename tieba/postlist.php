<?php 
    require_once "db.php";
    $DB=new DB();
    if(isset($_ENV['pn']))
      $PN=$_ENV['pn'];
    else $PN=1;
    if(isset($_ENV['tid'])){
      $TID=$_ENV['tid'];
      $ACTION="getPosts";
      require "postmanager.php";
    }else return;
?>
<html>
<head>
    <meta charset="gbk">
    <title>上交acm</title>

    <link rel="apple-touch-icon" href="http://tb2.bdstatic.com/tb/wap/img/touch.png">
    <style>
        header, footer, section, article, aside, nav, figure {
            display:block;
            margin:0;
            padding:0;
            border:0
        }
    </style>
    <link rel="shortcut icon" href="http://static.tieba.baidu.com/tb/favicon.ico">
    <link rel="canonical" href="http://tieba.baidu.com/p/2665938259">
    <link rel="stylesheet" href="short.css">
    <script>
        PDC.mark("ht");
        PDC.mark("vt");
    </script>
    <style id="ueditor_body_css">
        .edui-editor-body .edui-body-container p {
            margin:5px 0;
        }
        .edui-editor-body .edui-body-container {
            border:1px solid #ccc;
            border-left-color: #9a9a9a;
            border-top-color: #9a9a9a;
            outline:none;
            padding:0 10px 0;
            word-wrap:break-word;
            font-size:14px;
        }
        .edui-editor-body.focus {
            border:1px solid #5c9dff
        }
    </style>
</head>

<body class="skin_1" spellcheck="false">
    <div class="wrap1">
        <div class="wrap2">
            <div id="container" class="l_container clearfix ">
                <div class="p_thread thread_theme_3" id="thread_theme_3">
                    <div class="l_thread_info">
                        <ul class="l_posts_num">
                            <li class="l_pager pager_theme_2"></li>
                            <li class="l_reply_num" style="margin-left:2px; margin-right:10px">共有<span class="red">1</span>页</li>
                            <li class="l_reply_num"></li>
                            <li class="l_reply_num">回复贴:<span class="red" style="margin-right:3px">7</span>
                            </li>
                        </ul>
                        <div class="l_thread_manage">
                            <div class="d_del_thread"><a class="j_thread_delete" href="#">删除主题</a>
                            </div>
                            <div id="d_post_manage" style="display: none;">
                                <a href="#" class="d_post_manage_link">贴子管理</a>
                                <ul id="j_quick_thread" class="quick_thread_theme2" style="display:none;">
                                    <li><a class="j_thread_setgood" href="#">设为精华贴</a>
                                    </li>
                                    <li><a class="j_thread_disgood" href="#">取消精华贴</a>
                                    </li>
                                    <li><a class="j_thread_settop" href="#">置顶主题</a>
                                    </li>
                                    <li><a class="j_thread_distop" href="#">取消置顶</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tofrs_up" class="tofrs_up"></div>
                </div>
                <div class="left_section">
                    <div class="core">
                        <div class="core_title_wrap" id="j_core_title_wrap" style="">
                            <div class="core_title core_title_theme_2">
                                <h1 class="core_title_txt" title="上交acm模板">上交acm模板</h1>
                                <ul class="core_title_btns">
                                    <li class="quick_reply"><a href="#" id="quick_reply" class="j_quick_reply" >回复</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p_postlist" id="j_p_postlist">
                          <?php 
                          $i=0;
                          foreach($POSTLIST as $POST){
                            $POST['floor']=++$i; 
                            if($i==1)
                              require "mainpost.php";
                            else require "post.php";
                          }
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div id="bdimgshare_1382879177280" class="sr-bdimgshare-collection sr-bdimgshare-coll-1- sr-bdimgshare-coll-" style="position: absolute; left: 1028px; top: 24794px; display: none;"></div>
</body>

</html>
