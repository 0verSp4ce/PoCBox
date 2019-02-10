<?php
$url = @$_GET['url'];
$txt = sprintf('<script>window.location="%s";</script>',$url);
echo $txt;
?>