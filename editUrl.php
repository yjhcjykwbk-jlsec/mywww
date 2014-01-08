<html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="index.js"></script>
<?php
$linkid=$_REQUEST['link_id'];
include "pull.php";
echo "<pre>";
print_r(pullUrl($linkid));
echo "</pre>";
?>
<form>
linkname<label value="{linkname}"><br>
tags <input type="text" value="tags"><br>
<a href="" onclick='del_url(<?php echo $linkid;?>);return false;'>delete
</form>
</html>
 
