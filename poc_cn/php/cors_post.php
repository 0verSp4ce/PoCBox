<!DOCTYPE html>
<html>
<head>
    <title>CORS TEST</title>
</head>
<body>
    <div id='output'></div>
    <script type="text/javascript">
            var req = new XMLHttpRequest();
            var data = "<?php echo htmlspecialchars(@$_GET["data"]);?>";
            req.onload = reqListener;
            req.open('post','<?php echo htmlspecialchars(@$_GET["url"]);?>',true);
            req.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
            req.withCredentials = true;
            req.send(data);
            function reqListener() {
                var output = document.getElementById('output');
                output.innerHTML = "URL: <?php echo htmlspecialchars(@$_GET["url"]);?><br>Data: <?php echo htmlspecialchars(@$_GET["data"]);?><br><br>Response:<br><textarea style='width: 659px; height: 193px;'>" + req.responseText + "</textarea>";
                // document.write(this.responseText);
            };
    </script>
</body>
</html>
