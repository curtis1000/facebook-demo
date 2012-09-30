<?php
/**
 * Your app id and app secret should come from some server-side configuration source.
 * I used .htaccess for this demo with the following rule format:
 *
 * SetEnv APP_ID 150038811807640
 * SetEnv APP_SECRET bae00b2494f0d97bc17093bc5d5e72ad
 *
 * Don't publish your secret.
 */

// load the official Facebook PHP Class
require_once('includes/third-party/facebook.php');

$facebook = new Facebook(array(
    'appId'     => getenv('APP_ID'),
    'secret'    => getenv('APP_SECRET')
));