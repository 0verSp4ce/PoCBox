<html>
<head>
<style type="text/css"> 
.testframe {
	height: 100%;
} 
iframe {
	height: 100%;
	width: 100%;
	border: 0;
	margin: 0;
	padding: 0;
<?php
if($_GET['ishidden'] == "1"){
echo <<<KE
    filter: alpha(Opacity=0); /*Before IE8*/
    -moz-opacity: 0; /*Firefox*/
    -webkit-opacity: 0; /*webkit*/
    -khtml-opacity: 0; /*KHTML*/
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; /*After IE8*/
    opacity: 0;
KE;
}else{echo "";}
?>
}
.btn {
    position: fixed;
    width: <?php echo @$_GET['width'];?>;
    height: <?php echo @$_GET['height'];?>;
    left: <?php echo @$_GET['left'];?>;
    right: 0;
    display: block;
    top: <?php echo @$_GET['top'];?>;
} 
</style>
</head>
<body>
<div class="testframe">
    <input type="button" class="btn" value="Click">
	<iframe src="<?php echo @$_GET['url'];?>"></iframe>
</div>
</body>
</html>