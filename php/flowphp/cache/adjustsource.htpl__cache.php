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
<link type="text/css" href="css/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<body>
<style>.dropdown {width:164px;}</style>
	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
				<div id="logo">
					<a href="/" title="data2db"><img src="images/logo.png" alt=""></a>
				</div>
				
				<div id="menu">
					
					<?php if(function_exists('leftbar')) {echo leftbar("adjust_source");} ?>
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
					<fieldset>
						<legend><?php echo _e("old_source"); ?></legend>
						<div class="preview_box"><div><?php if (isset($_res['msg'])) {echo $_res['msg'];} else if (isset($msg) && !is_array($msg)) { echo $msg;} ?></div>
<table class="normal tablesorter">
	<thead>
		<tr>
			<th class="header">&nbsp;</th>
			<?php if(isset($_res['head'])) {foreach ($_res['head'] as $i0=>$vo){ ?>
			<th class="header">第<?php if (isset($_res['vo'])) {echo $_res['vo'];} else if (isset($vo) && !is_array($vo)) { echo $vo;} ?>列</th>
			<?php } } ?>
		</tr>
	</thead>
	<tbody>
		<tr class="odd">
			<td>第1行</td>
			<?php if(isset($_res['rows1'])) {foreach ($_res['rows1'] as $i1=>$vo){ ?>
			<td><?php if (isset($_res['vo'])) {echo $_res['vo'];} else if (isset($vo) && !is_array($vo)) { echo $vo;} ?></td>
			<?php } } ?>
		</tr>
		<tr class="odd">
			<td>第2行</td>
			<?php if(isset($_res['rows2'])) {foreach ($_res['rows2'] as $i2=>$vo){ ?>
			<td><?php if (isset($_res['vo'])) {echo $_res['vo'];} else if (isset($vo) && !is_array($vo)) { echo $vo;} ?></td>
			<?php } } ?>
		</tr>
	</tbody>
</table>
</div>
                        <div class="adjust_box">
                            <div class="adjust">
		                        <input type="button" class="div_btn" style="margin: 15px 15px;float:left;" onclick="addDivide(this);"  value="<?php echo _e("add_divide"); ?>" />
		                        <input type="button" class="com_btn"  style="margin: 15px 15px;float:left;" onclick="addCombine(this);"  value="<?php echo _e("add_combine"); ?>" />
		                        <input type="button" class="next_btn" style="margin: 15px 15px;float:left;" onclick="previewAdjust(this);"  value="<?php echo _e("next"); ?>" />
	                        </div>
	                    </div>
                        <br clear="all"/>
					</fieldset>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<script type='text/javascript' src='js/core-adjustsource.js'></script>
<div id="footer" align=center>
	<p>CopyRight&copy;2012 by <a href="http://3haku.net">princehaku</a></p>
</div>

<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?type=right&amp;btn=r1.gif" charset="utf-8"></script>

</body></html>
