<?php

session_start();
require_once "googleapi/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("828258148036-ms4c5hmrfl7aul7d3e6975dtcgh6a887.apps.googleusercontent.com");
$gClient->setClientSecret("XYkmjQT8_fS-OQzS0vwE31gs");
$gClient->setApplicationName("akubaru");
$gClient->setRedirectUri("http://localhost/2019/project/tugas3-pwa-oauth-jexcel-sieg/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>