<?php
$url = @$_GET['url'];
$file = @$_GET['file'];
$pocCode = <<<K
<meta charset="utf-8">
<form action="{$url}" method="post" enctype="multipart/form-data">
    <label for="file">File:</label>
    <input type="file" name="{$file}" id="file" />
    <input type="submit" value="Upload" />
</form>
K;
echo $pocCode;
?>