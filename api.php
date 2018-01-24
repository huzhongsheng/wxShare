<?php
require_once "jssdk.php";
$url = empty($_POST['url'])?'http://domain.com':$_POST['url'];
$jssdk = new JSSDK("xxxxAppidxxx", "xxxxxAppSecretxxxxx");
$signPackage = $jssdk->GetSignPackage($url);
echo json_encode($signPackage);
?>