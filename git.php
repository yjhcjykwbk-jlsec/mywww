	<style>
		li{
			margin-bottom:5px;
		}
	</style>
	<div id="git_div" style="display:none;max-width:200px;max-height:300px;overflow:overlay;">
		<ul id="urls"></ul>
	</div>
	<script>
		$.get("http://github.com/stevenberge",function(data){
			alert(data);
		},'text');
		<!-- arr=[] -->
<!-- $.each($(".repolist-name").val("h3"),function(i,it){arr.push(it.innerText);});arr.sort(); -->
var arr=["LSTM", "OCR_WITH_TEMPLATE_MATCHING_MATLAB", "RobotDetect", "TI", "TextCopyDetection_ferret", "TextDetection_Chung-Ta-Ku", "TextDetection_DCText", "TextDetection_SEDA-CV", "TextDetection_Stab-Textection", "TextDetection_abroun", "TextOCR_neural-ocr", "TextOCR_ocropus", "bbs", "facerec", "gumbo-parser", "handwriting", "linosu", "mysqldb", "neural-network", "nprize", "ocr", "ocrstyle", "qtapps", "recommender", "ristretto", "sha", "sissi", "vim", "zrender"];
arr.sort();
$.each(arr,function(i,it){
	urls.innerHTML+="<li><a target=\"__blank"+it+"\" href=\"http://github.com/stevenberge/"+it+"\">"+it+"</a></li>";
});
		<!-- var s="";$.each($(".repolist-name").val("h3"),function(i,it){s+="<a target=\"__blank\" href=http://github.com/stevenberge/"+it.innerText+">"+it.innerText+"</a><hr>";}); -->
<!-- alert(s); -->
</script>
	<!-- <hr><a target="__blank" href=http://github.com/stevenberge/TextDetection_SEDA-CV>TextDetection_SEDA-CV</a><hr><a target="__blank" href=http://github.com/stevenberge/TI>TI</a><hr><a target="__blank" href=http://github.com/stevenberge/qtapps>qtapps</a><hr><a target="__blank" href=http://github.com/stevenberge/sissi>sissi</a><hr><a target="__blank" href=http://github.com/stevenberge/zrender>zrender</a><hr><a target="__blank" href=http://github.com/stevenberge/handwriting>handwriting</a><hr><a target="__blank" href=http://github.com/stevenberge/LSTM>LSTM</a><hr><a target="__blank" href=http://github.com/stevenberge/ocrstyle>ocrstyle</a><hr><a target="__blank" href=http://github.com/stevenberge/vim>vim</a><hr><a target="__blank" href=http://github.com/stevenberge/OCR_WITH_TEMPLATE_MATCHING_MATLAB>OCR_WITH_TEMPLATE_MATCHING_MATLAB</a><hr><a target="__blank" href=http://github.com/stevenberge/TextCopyDetection_ferret>TextCopyDetection_ferret</a><hr><a target="__blank" href=http://github.com/stevenberge/mysqldb>mysqldb</a><hr><a target="__blank" href=http://github.com/stevenberge/TextOCR_neural-ocr>TextOCR_neural-ocr</a><hr><a target="__blank" href=http://github.com/stevenberge/RobotDetect>RobotDetect</a><hr><a target="__blank" href=http://github.com/stevenberge/gumbo-parser>gumbo-parser</a><hr><a target="__blank" href=http://github.com/stevenberge/facerec>facerec</a><hr><a target="__blank" href=http://github.com/stevenberge/linosu>linosu</a><hr><a target="__blank" href=http://github.com/stevenberge/bbs>bbs</a><hr><a target="__blank" href=http://github.com/stevenberge/ocr>ocr</a><hr><a target="__blank" href=http://github.com/stevenberge/TextDetection_DCText>TextDetection_DCText</a><hr><a target="__blank" href=http://github.com/stevenberge/ristretto>ristretto</a><hr><a target="__blank" href=http://github.com/stevenberge/neural-network>neural-network</a><hr><a target="__blank" href=http://github.com/stevenberge/TextDetection_Chung-Ta-Ku>TextDetection_Chung-Ta-Ku</a><hr><a target="__blank" href=http://github.com/stevenberge/recommender>recommender</a><hr><a target="__blank" href=http://github.com/stevenberge/sha>sha</a><hr><a target="__blank" href=http://github.com/stevenberge/nprize>nprize</a><hr><a target="__blank" href=http://github.com/stevenberge/TextOCR_ocropus>TextOCR_ocropus</a><hr><a target="__blank" href=http://github.com/stevenberge/TextDetection_abroun>TextDetection_abroun</a><hr><a target="__blank" href=http://github.com/stevenberge/TextDetection_Stab-Textection>TextDetection_Stab-Textection</a> -->

