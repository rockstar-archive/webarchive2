
function itsShowtime(){
	tmpy="";
	tmpy += '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="700" height="680" id="leeds_intro2" align="middle">';
	tmpy += '<param name="allowScriptAccess" value="sameDomain" />';
	tmpy += '<param name="movie" value="intro.swf" />';
	tmpy += '<param name="quality" value="high" />';
	tmpy += '<param name="bgcolor" value="#ffffff" />';
	tmpy += '<embed src="intro.swf" quality="high" bgcolor="#ffffff" width="700" height="680" name="intro" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
	tmpy += '</object>';
	
	document.write(tmpy);
}