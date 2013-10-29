<?php
  require "db.php";
  $DB=new DB();
  $ACTION="getThreads";$PN=$_ENV['pn'];
  require "postmanager.php";
  ?>
<html>
<head></head>

<body class="skin_8" spellcheck="false">
    <meta charset="gbk">
    <title>涓汉璁哄潧</title>
    <link rel="apple-touch-icon" href="http://tb2.bdstatic.com/tb/wap/img/touch.png">
    <style>
        header, footer, section, article, aside, nav, figure {
            display:block;
            margin:0;
            padding:0;
            border:0
        }
    </style>
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
    <link href="http://bdimg.share.baidu.com/static/css/bdsstyle.css?cdnversion=20130704" rel="stylesheet" type="text/css">


    <div class="wrap1">
        <div class="wrap2">
            <div id="container">
                <div class="frs_content clearfix">
                    <div class="contet_wrap" id="contet_wrap">
                        <div id="content_leftList" class="content_leftList clearfix">
                            <ul id="thread_list" class="threadlist">
                                <?php $i=0;foreach($THREADLIST as $THREAD){
                                if(($i++)%2==0){ ?>
                                <li class="j_thread_list" data-field="">
                                <?php }else{?>
                                <li class="j_thread_list threadlist_li_gray" data-field="">
                                <?php }?>
                                    <div class="threadlist_li_left j_threadlist_li_left">
                                        <div title="" class="threadlist_rep_num j_rp_num">1</div>
                                    </div>
                                    <div class="threadlist_li_right j_threadlist_li_right">
                                        <div class="threadlist_lz clearfix">
                                            <div class="threadlist_text threadlist_title j_th_tit  notStarList ">
                                                <a href="?mod=posts&tid=<?php echo $THREAD['tid'];?>" title="_有情燕_" target="_blank" class="j_th_tit">
                                                <?php echo $THREAD['title'];?></a>
                                            </div>
                                        </div>
                                        <div class="j_threadlist_detail threadlist_detail clearfix">
                                            <div class="threadlist_text">
                                                <div class="threadlist_abs threadlist_abs_onlyline">this is digest</div>
                                            </div>
                                            <div class="threadlist_author">
                                                <span class="tb_icon_author_rely j_replyer" title=".." style="float:left"></span>
                                                <span class="threadlist_reply_date j_reply_data" title=".."><?php echo $THREAD['timestamp'];?></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <?php }?>
                            </ul>
                            <div id="frs_list_pager" class="pager clearfix"><span class="cur">1</span>
                                <a href="/f?kw=%BB%AA%B3%BF%D3%EE&amp;tp=0&amp;pn=50">2</a>
                                <a href="/f?kw=%BB%AA%B3%BF%D3%EE&amp;tp=0&amp;pn=100">3</a>
                                <a href="/f?kw=%BB%AA%B3%BF%D3%EE&amp;tp=0&amp;pn=150">4</a>
                                <a href="/f?kw=%BB%AA%B3%BF%D3%EE&amp;tp=0&amp;pn=50" class="next">previous</a>
                                <a href="/f?kw=%BB%AA%B3%BF%D3%EE&amp;tp=0&amp;pn=92300" class="last">next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tb_rich_poster_container" class="tb_rich_poster_container" style="display: block;">
                <div id="tb_rich_poster" class="tb_rich_poster compat_rich_poster">
                    <a name="sub"></a>
                    <div class="poster_head clearfix">
                        <div class="poster_head_text">鍙戣〃鏂拌创<span class="split_text">|</span><a class="add_vote_btn" title="鍙戣捣鎶曠エ" target="_blank" href="/f/vote/create?kw=%BB%AA%B3%BF%D3%EE">鍙戣捣鎶曠エ</a>
                        </div>
                        <div class="poster_head_surveillance j_surveillance">鍙戣创璇烽伒瀹? <a href="/tb/eula.html" target="_blank">璐村惂鍗忚鍙娾�滀竷鏉″簳绾库�?</a>
                        </div>
                    </div>
                    <div class="poster_body editor_wrapper">
                        <div class="poster_component title_container">
                            <div class="poster_title">鏍?&nbsp;&nbsp;棰?:</div>
                            <div>
                                <input type="text" class="editor_textfield editor_title ui_textfield j_title" name="title" autocomplete="off">
                                <div class="tbui_placeholder" style="top: 1px; left: 10px; height: 30px; line-height: 30px; color: rgb(191, 191, 191); display: none;">璇峰～鍐欐爣棰?</div>
                            </div>
                            <div class="poster_error j_error"></div>
                        </div>
                        <div class="poster_component editor_content_wrapper ueditor_container">
                            <div class="poster_reply">鍐?&nbsp;&nbsp;瀹?:</div>
                            <div class="old_style_wrapper">
                                <div class="edui-container" style="width: 600px;">
                                    <div class="tb_poster_placeholder" style="display: block;">瀹㈡埛绔彂璐寸粡楠?<span style="color:#CF2525; font-size:30px;font-weight:bold">3鍊?</span>澶у洖棣堬紝<a href="http://c.tieba.baidu.com/c/s/download/pc?src=webfatie" style="color:#2D64B3; text-decoration:underline;"
                                        target="_blank">鐙傛嫿鐐叿灞岀偢澶╂湁鏈ㄦ湁</a>
                                    </div>
                                    <div class="edui-toolbar">
                                        <div class="edui-btn-toolbar" unselectable="on" onmousedown="return false">
                                            <div class="edui-btn edui-btn-bold " unselectable="on" onmousedown="return false" style="display: none;">
                                                <div unselectable="on" class="edui-icon-bold edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-red " unselectable="on" onmousedown="return false" style="display: none;">
                                                <div unselectable="on" class="edui-icon-red edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-image " unselectable="on" onmousedown="return false" data-original-title="鎻掑叆鍥剧墖">
                                                <div unselectable="on" class="edui-icon-image edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-video " unselectable="on" onmousedown="return false" data-original-title="鎻掑叆瑙嗛">
                                                <div unselectable="on" class="edui-icon-video edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-music " unselectable="on" onmousedown="return false" data-original-title="鎻掑叆闊充箰">
                                                <div unselectable="on" class="edui-icon-music edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-emotion" unselectable="on" onmousedown="return false" data-original-title="鎻掑叆琛ㄦ儏">
                                                <div unselectable="on" class="edui-icon-emotion edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-scrawl " unselectable="on" onmousedown="return false">
                                                <div unselectable="on" class="edui-icon-scrawl edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-attachment  edui-last-btn" unselectable="on" onmousedown="return false" data-original-title="鎻掑叆闄勪欢">
                                                <div unselectable="on" class="edui-icon-attachment edui-icon"></div>
                                            </div>
                                            <div class="edui-btn edui-btn-voice " unselectable="on" onmousedown="return false" data-original-title="鍙戣闊?" style="display: none;">
                                                <div unselectable="on" class="edui-icon-voice edui-icon"></div><span class="edui-icon-new"></span>
                                            </div>
                                        </div>
                                        <div class="edui-dialog-container"></div>
                                    </div>
                                    <div class="edui-editor-body">
                                        <div id="ueditor_replace" style="width: 580px; min-height: 220px; z-index: 0;" class=" edui-body-container" contenteditable="true">
                                            <p>
                                                <br>
                                            </p>
                                        </div>
                                        <div class="edui_at_box" style="display: none;">
                                            <div class="at_box_title">鎯崇敤@鎻愬埌璋侊紵</div>
                                            <ul></ul>
                                        </div>
                                    </div>
                                    <div class="edui-attachment-container"></div>
                                </div>
                            </div>
                            <div class="poster_error j_error"></div>
                        </div>
                        <div class="j_poster_signature poster_signature" style="display: none;">
                            <label>
                                <input type="checkbox" class="j_use_signature">浣跨敤绛惧悕妗?</label>&nbsp;<span class="j_signature_wrapper signature_wrapper"><select name="sign_id" class="j_sign_id"></select>&nbsp;<a style="color:#0449BE" target="_blank" href="/i/sys/jump?type=signsetting">鏌ョ湅鍏ㄩ儴</a></span>
                        </div>
                        <div class="poster_component editor_bottom_panel clearfix"><a href="#" class="ui_btn ui_btn_m j_submit poster_submit" title="Ctrl+Enter蹇嵎鍙戣〃"><span><em>鍙? 琛?</em></span></a><span class="poster_posting_status j_posting_status"></span>
                            <div class="poster_draft_status j_draft" style="display: none;"><span class="j_content"></span><span title="娓呯┖鑽夌ǹ" class="poster_draft_delete j_clear"></span>
                            </div>
                        </div>
                    </div>
                    <div id="bdInputObjWrapper">
                        <object id="BdInputAx" type="application/baiducnff-activex" progid="BaiducnAx.ScreenShotAx.1" width="0" height="0"></object>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="http://tb1.bdstatic.com/tb/static-common/style/ueditor_extend_83890c9f.css">


</body>

</html>

