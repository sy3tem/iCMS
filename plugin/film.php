<?php
require dirname(__FILE__) . '/../iPHP.php';
$uri = 'https://vip.video.qq.com/fcgi-bin/comm_cgi?name=hierarchical_task_system&cmd=2';
$rs = iHttp::get($uri);
echo $rs;