<?php 
require('vendor/autoload.php');
require('head.php');
switch($_GET['action']) {
case 'welcome':
case 'archive':
case 'weather':
case 'about':
case 'login':
case 'postdetail':
case 'client':
case 'server':
case 'projects':
require $_GET['action']. '.php';
break;
default:
require('content.php'); 
break;
}
require('foot.php');

