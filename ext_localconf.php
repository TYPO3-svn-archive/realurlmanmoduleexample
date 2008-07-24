<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");
require_once(t3lib_extMgm::extPath('realurlmanagement').'class.tx_realurlmanagement.php');

$myModule['extkey']=$_EXTKEY;
$myModule['script']='pi/class.tx_realurlmanmoduleexample.php';
$myModule['class']='tx_realurlmanmoduleexample';
$myModule['text']='LLL:EXT:'.$_EXTKEY.'/pi/locallang.php:label.example';

tx_realurlmanagement::registerModule($myModule);
?>
