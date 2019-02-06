<?php
$url = @$_GET['url'];
header("Location: $url");
echo "HTTP Header -> Location: $url";
?>