<!--
popup = function(url, titulo, w, h, scrol, retorno) {
	
	var lado = (screen.width) ? ((screen.width - w) / 2) : 100;
	var cima = (screen.height) ? ((screen.height-h) / 2) - 28 : 20;
	if(lado < 0) lado = 0;
	if(cima < 0) cima = 0;

	var conf = "width=" + w + ",height=" + h + ",top=" + cima + ",left=" + lado + ",scrollbars=" + scrol + ",status=0";

	if(retorno === true) return(!window.open(url, titulo, conf));
	else window.open(url, titulo, conf);
	
}
-->