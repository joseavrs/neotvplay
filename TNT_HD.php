<?php
header ("Content-Type: application/x-mpegURL; charset=UTF-8");
 header ('Content-Disposition: attachment; filename=index.m3u8 ');
    $url = "http://tstv.lcdn.claro.net.co/Content/hls_kr/Live/Channel(TNT_HD)/index.m3u8";
    $file = file_get_contents($url, false, $context);
    $file = str_replace("Stream", "$url.Stream", $file );
    $file = str_replace("http://tstv.lcdn.claro.net.co/Content/hls_kr/Live/Channel", "/skr/wwxx.php?u=", $file );
    $file = str_replace("index.m3u8.Stream(", "Stream(", $file );
echo $file;

?>