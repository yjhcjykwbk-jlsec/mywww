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
	<style>
.dropdown {
	width: 164px;
}
</style>
	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
				<div id="logo">
					<a href="/" title="data2db"><img src="images/logo.png" alt="">
					</a>
				</div>
				
				<div id="menu">
					
					<?php if(function_exists('leftbar')) {echo leftbar("set_source_format");} ?>
				</div>
				
			</div>
			

			<div id="primary_right">
				<div class="inner" style="min-width: 800px;">
					<div class="notification info" style="cursor: auto;">
						<div class="text">
							<p>
								<strong>Tips</strong>设置数据格式，excel会自动设置。其他请按您数据文件的格式来设置。 
							</p>
						</div>
					</div>
					<fieldset style="float: left; width: 300px;">
						<legend>设置源格式</legend>
						<div>
							行分隔符&nbsp;&nbsp;&nbsp;<select id="line_det_sel" class="dropdown">
								<option value="">每一行数据分隔符号</option>
								<option value="\r\n">回车符(\r\n)</option>
								<option value="\n">换行符(\n)</option>
								<option value=" ">空格( )</option>
								<option value="\t">制表符(\t)</option>
								<option value='o'>其他</option>
							</select><input type="text" style="display: none" value="\n"
								name="line_det" id="line_det_val" />
						</div>
						<br />
						<div>
							字段分界符&nbsp;<select id="row_det_sel" class="dropdown">
								<option value="">选择字段分隔符号</option>
								<option value=",">逗号(,)</option>
								<option value=" ">空格( )</option>
								<option value="\t">制表符(\t)</option>
								<option value='o'>其他</option>
							</select><input type="text" style="display: none" name="row_det"
								id="row_det_val" />
						</div>
						<br />
						<div>
							字段环绕符&nbsp;<select id="enclosure_det_sel" class="dropdown">
								<option value="">选择字段环绕符号</option>
								<option value="！@#">无()</option>
								<option value="'">单引号(')</option>
								<option value='"'>双引号(")</option>
								<option value='o'>其他</option>
							</select><input type="text" style="display: none" name="enclosure_det"
								id="enclosure_det_val" />
						</div>
						<br />
						<div>
							文件编码&nbsp;&nbsp;&nbsp;<select id="encode" class="dropdown">
								<option value="utf8">UTF8</option>
								<option value="gbk">GB2312/GBK</option>
							</select>
						</div>
						<br />
						<div>
							<label><input type="checkbox" name="skip_head"
								id="skip_head"><?php echo _e("ignore_head"); ?></label>
						</div>
						<br /> <input type="submit"
							style="margin: 15px 0px; float: right" id="preview_btn"
							value="<?php echo _e("preview"); ?>" />
					</fieldset>
					<fieldset style="float: left; margin-left: 0px; min-width: 400px">
						<legend><?php echo _e("preview"); ?></legend>
						<div id="preview_box"></div>
						<form action="?action=main&method=adjustSource" method="post">
							<input type="submit"
								style="margin: 15px 0px; float: left; display: none"
								id="next_btn" value="<?php echo _e("next"); ?>" />
						</form>
					</fieldset>
					<br clear="both" />
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<script type='text/javascript' src='js/core-setsourceformat.js'></script>
	<script>
		$(document).ready(function() {
			$("#line_det_sel").val('<?php if (isset($_res['line_det'])) {echo $_res['line_det'];} else if (isset($line_det) && !is_array($line_det)) { echo $line_det;} ?>');
			$("#line_det_val").val('<?php if (isset($_res['line_det'])) {echo $_res['line_det'];} else if (isset($line_det) && !is_array($line_det)) { echo $line_det;} ?>');
			$('#row_det_sel').val('<?php if (isset($_res['row_det'])) {echo $_res['row_det'];} else if (isset($row_det) && !is_array($row_det)) { echo $row_det;} ?>');
			$('#row_det_val').val('<?php if (isset($_res['row_det'])) {echo $_res['row_det'];} else if (isset($row_det) && !is_array($row_det)) { echo $row_det;} ?>');
			$('#enclosure_det_sel').val('<?php if (isset($_res['enclosure_det'])) {echo $_res['enclosure_det'];} else if (isset($enclosure_det) && !is_array($enclosure_det)) { echo $enclosure_det;} ?>');
			$('#enclosure_det_val').val('<?php if (isset($_res['enclosure_det'])) {echo $_res['enclosure_det'];} else if (isset($enclosure_det) && !is_array($enclosure_det)) { echo $enclosure_det;} ?>');
		});
	</script>
	<div id="footer" align=center>
	<p>CopyRight&copy;2012 by <a href="http://3haku.net">princehaku</a></p>
</div>

<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?type=right&amp;btn=r1.gif" charset="utf-8"></script>

</body></html>