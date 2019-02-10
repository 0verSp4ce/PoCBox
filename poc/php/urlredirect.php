<?php
$url = @$_GET['url'];
$content = file_get_contents("../others/urlredirect.txt");
echo htmlspecialchars(str_replace("{target}",$url,$content));
?>