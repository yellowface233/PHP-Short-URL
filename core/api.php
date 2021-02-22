<?php
header("Content-type:text/html;charset=utf-8");
$url = $_GET['url'];
$num = rand(100000,99999999);

include 'settings.php';
echo '<title>'.$stitle.' - 生成结果</title>';

if(empty($url)){
    echo 'URL为空.<br>';
}else{
    if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
    echo "创建信息:URL验证通过<br>";
    $path = "{$_SERVER['DOCUMENT_ROOT']}/url/{$num}";
    $res=mkdir($path,0777,true); 
    if ($res){
        echo "创建信息:链接目录创建成功<br>";
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $fp = fopen("$DOCUMENT_ROOT/url/$num/index.html",'w');
        fwrite($fp,'<noscript>请启用JS</noscript><script>window.location.href="'.$url.'";</script><title>重定向中...</title>');
        fclose($fp);
        echo '创建信息:生成完毕,请打开链接检查结果<br>';
        echo '原地址:'.$url.'<br>';
        echo '短链接:'.$zurl.'/url/'.$num.'<br>';
        echo '作者:YELLOWFACE';
    }else{
        echo "错误:系统为您生成的URL可能被占用,请点击刷新按钮重新生成一次.<br>";
    }
}else{
    echo '错误:这不是合法的URL地址 请注意地址需要带有http 或者 https!!<br>';
    }
}