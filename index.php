<?php
//
// PHASE: BOOTSTRAP
//
define('MINI_INSTALL_PATH', dirname(__FILE__));
define('MINI_SITE_PATH', MINI_INSTALL_PATH . '/site');

require(MINI_INSTALL_PATH.'/src/CMini/bootstrap.php');

$mi = CMini::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$mi->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$mi->ThemeEngineRender();