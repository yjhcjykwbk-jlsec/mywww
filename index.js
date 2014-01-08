function pull_urls(tag){
	other_links.innerHTML="";
	para=tag==""?"":"&tag="+tag;
	$.ajax({
		url:"pull.php", 
		data:"action=pullUrl"+para, type:'post', dataType:'json', 
		success:function(result){
			other_links.innerHTML="";
			for(var i=0; i<result.length; i++)
	{
		newrow=other_links.insertRow(other_links.rows.length);
		newcol=newrow.insertCell(0);
		newcol.innerHTML=result[i][0];
		newcol=newrow.insertCell(1);
		newcol.innerHTML=result[i][1];
		newcol=newrow.insertCell(2);
		newcol.innerHTML="<a target=_blank href="+result[i][2]+">"+result[i][2].substring(0,20)+"</a>";
		newcol=newrow.insertCell(3);
		newcol.innerHTML="<button onclick=del_url("+result[i][0]+")>del</button>";
	}
		}
	}
	);
}
function pull_urls_div(tag){
	other_links_div.innerHTML="";
	if(tag!="") para="&tag="+tag;
	else para="";
	$.ajax({
		url:"pull.php", 
		data:"action=pullUrl"+para, type:'post', dataType:'json', 
		success:function(result){
			other_links.innerHTML="";
			for(var i=0; i<result.length; i++){
				other_links.innerHTML+="<a target=_blank href="+result[i][2]+
		" style=\"font-size:"+Math.ceil(Math.random()*6+8)+"pt;\">"+result[i][1]+"</a>"+
		"<a class='edit-url' id='"+result[i][0]+"' href=''"+
		// onclick='"+ //function(ev){"+
		// // "console.log(ev);return false;}'"+
		// "edit_url(this," +result[i][0]+");return false;'"+
		">... </a>";
	//here use each to add a listener to everyone
	$("a.edit-url").each(function() {
		var id=$(this).attr('id');
		$(this).click(function(ev){
			//clientX is the screen p-x of ev
			//and window's scrollX add clientX is the page p-x of ev
			edit_url(ev.clientX+window.scrollX,ev.clientY+window.scrollY,id);
			return false;
		});
	});
			}
		}
	}
	);
}
function pull_tags_div(){
	tags_div.innerHTML="";
	$.ajax({
		url:"pull.php", 
		data:"action=pullTag", type:'post', dataType:'json', 
		success:function(result){
			console.log("pull_tags_div():");
			console.log(result);
			window.result=result;
			for(var i=0; i<result.length; i++){
					tags_div.innerHTML+=
		"<a href='' target='__blank' onclick='pull_urls_div("+"\""+result[i]+"\""+");return false;'"+
		" style=\"font-size:"+Math.ceil(Math.random()*6+8)+"pt;\">"
		+result[i]+"</a>";
				}
		}
	}
	);
}
function del_url(id){
	if(confirm("will delete url:"+id)) 
		$.ajax({
			url:"push.php",
			data:"action=delUrl&link_id="+id, 
			success:function(result){
				console.log(result);
				alert(result);
				pull_urls("")
			}
		}
		);
}
function set_url(linkid,linkname,linkvalue,linktags){
	$.ajax({
		url:"push.php", 
		data:"action=setUrl&link_id="+linkid+"&link_name="+linkname+"&link_value="+linkvalue+"&link_tags="+linktags, 
		success:function(result){
			alert(result);
			set_result=$('.edit-url-form label[name="set-result"]');
			set_result.attr("value","设置成功");
		}
	}
	);
}
function push_urls(linkname,linkvalue,linktags){
	$.ajax({
		url:"push.php", 
		data:"action=pushUrl&link_name="+linkname+"&link_value="+linkvalue+"&link_tags="+linktags, 
		success:function(result){
			alert(result);
		}
	}
	);
}
function del_urls(){
	if(confirm("will delete all urls!"))
		if(confirm("do you really want to clear all recorded urls?")) 
			$.ajax({
				url:"push.php", 
				data:"", success:alert("didnot clear all urls")}
				);
}
function display_reply(res){
	replies.innerHTML="";
	for(i=0;
			i<res.length;
			i++) {
				newrow=replies.insertRow(replies.rows.length);
				newcol=newrow.insertCell(0);
				newcol.innerHTML=res[i][0];
				newcol=newrow.insertCell(0);
				newcol.innerHTML=res[i][1];
			}
}
<!-- 这个是client运行的，服务器被动响应，client再处理结果和显示-->
<!--对于服务器被动过http请求的响应，一般是php的main入口处理-->
<!--这个是客户端ajax请求的，属于php间接调用-->
function pull_reply(pg){
	$.ajax({
		url:"pull.php",dataType:"json",
		data:"reply_pg="+pg+"&pgsize=5",success:function(res){
		display_reply(res);
	}
	}
	);
}
function edit_url(x,y,id){
	console.log("edit_url():");
	console.log(id);
	popup=$('.popup');
	popup.css("display","block");
	popup.css("left",x);
	popup.css("top",y);
	console.log(popup);
	form=$('.edit-url-div .edit-url-form');
	$.ajax({
		//remember to add dataType=json, or result will not be handled rightly
		url:"pull.php",dataType:"json", 
		data:"action=editUrl&link_id="+id, 
		success:function(result){
		if(result.length>0){
			result=result[0];
			linkname=result[1];
			linkvalue=result[2];
			linktags=result[3];
			console.log(result);
			//remember the variable name cannot has '-'!
			link_id=$('.edit-url-form input[name="link_id"]');
			link_id.attr("value",id);
			link_name=$('.edit-url-form input[name="link_name"]');
			link_name[0].value=linkname;
			link_value=$('.edit-url-form input[name="link_value"]');
			console.log(link_value[0].value);
			link_value[0].value=linkvalue;
			link_tags=$('.edit-url-form input[name="link_tags"]');
			link_tags.attr("value",linktags);
			// console.log(form.children());	
			// console.log($(form)('#linkname'));	
		}
		}
	});
	// $edit_url_form.html(content);
	// winID = window.openSub("editUrl.php?link_id="+id,'newWin', 'width=400,height=300');
}

