<!DOCTYPE html>
<html>
<head>
	<title>CORS TEST</title>
</head>
<body>
	<div id='output'></div>
	<script type="text/javascript">
			var req = new XMLHttpRequest(); 
			req.onload = reqListener; 
			req.open('get','<?php echo htmlspecialchars(@$_GET["url"]);?>',true);
			//req.setRequestHeader("Content-Type","application/x-www-form-urlencoded;"); 
			req.withCredentials = true;
			req.send();
			function reqListener() {
				var output = document.getElementById('output');
				output.innerHTML = "URL: <?php echo htmlspecialchars(@$_GET["url"]);?><br><br>Response:<br><textarea style='width: 659px; height: 193px;'>" + req.responseText + "</textarea>";
			};
	</script>
</body>
</html>