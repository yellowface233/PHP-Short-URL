<?php
include 'settings.php';
?>
<!DOCTYPE HTML>
<html lang="<?php echo $htmlang;?>">
<head>
<meta charset="utf-8" />
<!--By YellowFace-->
<title id="title"><?php echo $stitle;?></title>
<meta name="keywords" content="<?php echo $keywords;?>" />
<meta name="description" content="<?php echo $description;?>" />
<script src="core/js/common.js"></script>
<script src="core/js/zidingyi.js"></script>
<link rel="stylesheet" href="core/css/zidingyi.css" />
</head>
<body>
<!--<BR><BR><BR>
<BR><BR>-->

<img src="<?php echo $logoimg;?>" />

<BR>

<form action="">
<input value="api" name="type" style="display:none;" /><?php // 用于指定index.php模式为api ?>
欲缩短的网址: <input name="url" />
<p></p>
<input type="submit" id="7button" value="生 成" />
</form>

<hr>
<?php
echo $footer;
?>
<p id="copyright">本站使用YF短网址生成程序,作者YellowFace 版本1.0.0</p>
</body>
</html>
