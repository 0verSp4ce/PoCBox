<?php
$url = @$_GET['url'];
$txt = sprintf('<script>window.location="%s";</script>',str_replace('"',"%22",$url));
echo $txt;
?>