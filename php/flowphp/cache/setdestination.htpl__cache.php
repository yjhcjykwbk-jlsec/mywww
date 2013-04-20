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
<style>.dropdown {width:164px;}</style>
	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
				<div id="logo">
					<a href="/" title="data2db"><img src="images/logo.png" alt=""></a>
				</div>
				
				<div id="menu">
					
					<?php if(function_exists('leftbar')) {echo leftbar("set_destination");} ?>
				</div>
				
			</div>
			
			<div id="primary_right">
				<div class="inner" style="min-width:800px;">
					<div class="notification info" style="cursor: auto;">
						<div class="text">
							<p>
								<strong>Tips</strong>在这里可以对导入的字段进行合并和拆分处理
							</p>
						</div>
					</div>
					<fieldset class="insert_box">
						<legend><?php echo _e("old_source"); ?></legend>
						<div class="input_box"><div>目标表名<input type="text" /></div>
						<div>&nbsp;</div>
							<table class="normal tablesorter">
								<thead>
									<tr>
										<th class="header">&nbsp;</th>
										<th class="header">原始数据</th>
										<th class="header">目标数据库字段名</th>
										<th class="header">插入该数据</th>
									</tr>
								</thead>
								<tbody>
										<?php if(isset($_res['cols1'])) {foreach ($_res['cols1'] as $i0=>$vo){ ?>
									<tr class="odd">
										<td>第<?php if (isset($vo['idx'])) {echo $vo['idx'];} else if (isset($idx) && !is_array($idx)) { echo $idx;} ?>列</td>
										<td><?php if (isset($vo['data'])) {echo $vo['data'];} else if (isset($data) && !is_array($data)) { echo $data;} ?></td>
										<td><input type="text" /></td>
										<td><input type="checkbox" value="$@<?php if (isset($vo['idx'])) {echo $vo['idx'];} else if (isset($idx) && !is_array($idx)) { echo $idx;} ?>@"/></td>
									</tr>
										<?php } } ?>
								</tbody>
							</table>
					</div>
					</fieldset>
					<fieldset>
						<legend><?php echo _e("adjust_source"); ?></legend>
						<input type="button" id="div_btn" style="margin: 15px 15px;float:left;" onclick="addmore(this);"  value="<?php echo _e("continue_add"); ?>" />
						<input type="button" style="margin: 15px 15px;float:left;" onclick="previewSetDestination();"  value="<?php echo _e("preview"); ?>" />
						<br clear="all"/>
					</fieldset>
					<fieldset>
						<legend><?php echo _e("sql_text"); ?></legend>
						<div id="preview_box"></div>
						<form action="?action=main&method=export"  method="post">
							<input type="submit" style="margin: 15px 0px;float:left;display:none" id="next_btn"  value="<?php echo _e("next"); ?>" />
						</form>
					</fieldset>
					<br clear="both"/>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<script type='text/javascript' src='js/core-setdestination.js'></script>
<div id="footer" align=center>
	<p>CopyRight&copy;2012 by <a href="http://3haku.net">princehaku</a></p>
</div>

<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?type=right&amp;btn=r1.gif" charset="utf-8"></script>

</body></html>
