<?php
session_start();
header("Content-type:text/html;charset=utf-8");
require_once 'config/system_config.php';
require_once PATH_INCLUDE . '/util/utils_time.php';
/**
 * 首页
 * @author wangqing
 * @since 15-1-26 下午5:24
 */


include(PATH_TEMPLATE . "index.html");