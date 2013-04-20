<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo _e("site_title"); ?></title>
<meta name="Keywords" content="<?php echo _e("site_keywords"); ?>" />
<meta name="Description" content="<?php echo _e("site_description"); ?> " />
<link type="text/css" href="css/style.css" rel="stylesheet" />
<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
<script type='text/javascript' src='js/jquery-ui-1.8.5.custom.min.js'></script>
<script type='text/javascript' src='js/easyTooltip.js'></script>
<script type='text/javascript' src='js/jquery.tablesorter.min.js'></script>
<!--[if IE]>
<link rel="stylesheet" href="css/IEfix.css" type="text/css" media="screen" />
<![endif]-->
</head>
<body>
	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
				<div id="logo">
					<a href="/" title="data2db"><img src="images/logo.png" alt=""></a>
				</div>
				
				<div id="menu">
					
					<?php if(function_exists('leftbar')) {echo leftbar("upload_datafile");} ?>
				</div>
				
			</div>
			

			<div id="primary_right">
				<div class="inner">
					<div class="notification info" style="cursor: auto;">
						<div class="text">
							<p>
								<strong>Tips</strong>请上传您需要导入到数据库中的源文件. 支持excel、PDF、XML、自定义格式的数据
							</p>
						</div>
					</div>
					<fieldset>
						<legend>数据文件导入</legend>
						<form id="form1" action="?action=main&method=setSourceFormat"
							method="post">
							<div class="uploaded">
								已经上传的文件: <br />
								<?php if(isset($_res['uploaded'])) {foreach ($_res['uploaded'] as $i0=>$vo){ ?>
									<div><?php if (isset($vo['source_name'])) {echo $vo['source_name'];} else if (isset($source_name) && !is_array($source_name)) { echo $source_name;} ?><span><a href="javascript:void(0);" onclick="del_uploaded('<?php if (isset($vo['source_name'])) {echo $vo['source_name'];} else if (isset($source_name) && !is_array($source_name)) { echo $source_name;} ?>',this);">[删除]</a></span></div>
								<?php } } ?>
							</div>
							<div class="fieldset flash" id="fsUploadProgress">
								<span class="legend">&nbsp;</span>
							</div>
							<div id="divStatus">&nbsp;</div>
							<div style="height: 30px;">
								<span id="spanButtonPlaceHolder">Loading。。。</span><input
									id="btnCancel" type="button" value=""
									onclick="swfu.cancelQueue();" disabled="disabled"
									style="visibility: hidden" />
							</div>
							<input type="submit" style="margin-top:30px;<?php if (isset($_res['style'])) {echo $_res['style'];} else if (isset($style) && !is_array($style)) { echo $style;} ?>" id="next_btn"
								value="<?php echo _e("next"); ?>" /> beta版目前只支持自定义格式的文件(csv,tsv也可以)
						</form>
					</fieldset>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<script type="text/javascript" src="plugin/swfupload/swfupload.js"></script>
	<script type="text/javascript"
		src="plugin/swfupload/swfupload.queue.js"></script>
	<script type="text/javascript" src="plugin/swfupload/fileprogress.js"></script>
	<script type="text/javascript" src="plugin/swfupload/handlers.js"></script>
	<script type="text/javascript">
		var swfu;
		window.onload = function() {
			var settings = {
				flash_url : "plugin/swfupload/swfupload.swf",
				upload_url : "index.php?action=file&method=upload",
				post_params : {
					"PHPSESSID" : "<?php echo session_id();?>"
				},
				file_size_limit : "16 MB",
				file_types : "*.txt;*.doc;*.docx;*.csv;*.data;*.xls;*.xlsx;*.pdf;*.xml",
				file_types_description : "数据文件",
				file_upload_limit : 100,
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},
				debug : false,
				// Button settings
				button_image_url : "images/buttons/upload.png",
				button_width : "128",
				button_height : "30",
				button_placeholder_id : "spanButtonPlaceHolder",
				button_text : '<span class="theFont">上传数据文件</span>',
				button_text_style : ".theFont { font-size: 16; }",
				button_text_left_padding : 12,
				button_text_top_padding : 3,
				// The event handler functions are defined in handlers.js
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete
			};

			swfu = new SWFUpload(settings);
		};
	</script>
	<script type='text/javascript' src='js/core-uploaddatafile.js'></script>
<div id="footer" align=center>
	<p>CopyRight&copy;2012 by <a href="http://3haku.net">princehaku</a></p>
</div>

<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?type=right&amp;btn=r1.gif" charset="utf-8"></script>

</body></html>
