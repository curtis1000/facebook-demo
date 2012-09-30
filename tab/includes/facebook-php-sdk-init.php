<?php

require_once('includes/third-party/facebook.php');

$facebook = new Facebook(array(
    'appId'     => getenv('APP_ID'),
    'secret'    => getenv('APP_SECRET')
));