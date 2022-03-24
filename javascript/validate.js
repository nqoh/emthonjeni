function _(x){
return document.getElementById(x);	
}
function validate(x){
 var file=_(x.id).files[0];
 if(file.type !="image/jpeg" && file.type !="image/png" && file.type !="image/jpg" ){
	alert("Invalid file type" );
	_(x.id).value=""; 
 }else{
	var ajax = new XMLHttpRequest();
	ajax.open("POST","process.php",true);
	ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
	if(ajax.readyState==4  && ajax.status==200){
	if(ajax.responseText != ""){
	alert(ajax.responseText);
	_(x.id).value="";	
	}
	}
	}
	ajax.send("files="+file.name); 
 }
}
function nondalo(){
alert("nnn")
	
}
function change(id,div,notice){
	var ids=['view-email','add-cultare','view-cultare'];
	var divs=['upload','culture-div','email-div'];
	for(var i=0; i < ids.length ; i++){
		if(ids[i] != id.id){
		_(ids[i]).style.color="#DDDCDC";
        _(ids[i]).style.background="none";
        _(ids[i]).style.padding="none";
		_(ids[i]).style.fontSize="20px";
        _(ids[i]).style.marginRight="20px";
		}
		if(divs[i] != div){
		_(divs[i]).style.display="none";	
		}
	}
  _("notice").innerHTML=notice;	
  _(div).style.display="block";	 
  _(id.id).style.color="white";
  _(id.id).style.backgroundColor="black";
  _(id.id).style.padding="10px";
  _(id.id).style.margin="0px";
  _(id.id).style.marginRight="8px";

	
}