<div><?php if (isset($_res['msg'])) {echo $_res['msg'];} else if (isset($msg) && !is_array($msg)) { echo $msg;} ?></div>
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
