<?php
$url = @$_GET['url'];
$cvalue = @$_GET['cvalue'];
$txt = sprintf('<script>function %s(data){ alert(JSON.stringify(data)) }</script> <script src="%s"></script>',$cvalue,$url);
echo $txt;
?>