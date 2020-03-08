<?php
/**
* iCMS - i Content Management System
* Copyright (c) 2007-2017 iCMSdev.com. All rights reserved.
*
* @author icmsdev <master@icmsdev.com>
* @site https://www.icmsdev.com
* @licence https://www.icmsdev.com/LICENSE.html
*/
define('iPHP',TRUE);
#define('iPHP_APP','iCMS'); //应用名
#define('iPHP_APP_MAIL','support@icmsdev.com');
define('iPATH',dirname(strtr(__FILE__,'\\','/'))."/");
//iPHP框架初始化
#require iPATH.'config.php';         //框架初始化配置
require iPATH.'iPHP/iPHP.php';      //iPHP框架文件
//引入结束

//以下为iCMS相关库
#require iPHP_APP_CORE.'/iCMS.version.php';
#require iPHP_APP_CORE.'/iCMS.class.php';
#require iPHP_APP_CORE.'/iCMS.func.php';

//iCMS初始化,在这里装进行对文件,缓存,URL,模板等进去配置
#iCMS::init();