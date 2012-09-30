<?php
require_once('includes/bootstrap.php');
require_once('includes/facebook-php-sdk-init.php');
require_once('includes/head.php');
?>
<body>

<div class="container">

    <h1>Curt&#146;s Facebook Demo App</h1>
    <hr />
    <h3>Public Pages</h3>
    <p>It is entirely in the programmer's control to determine which pages are public to the world and which pages require
    the user to be logged in.</p>
    <p>This page is public to the world. Users are not required to be logged in to the app, nor do they even need
    to be logged in to Facebook to see this page. A Marketer could safely reference this page's url in banner ads or email
    campaigns.</p>

    <h3>SDK Setup</h3>
    <p>This demo uses the Javascript SDK and the PHP SDK.</p>
    <p><a target="_blank" href="https://github.com/curtis1000/facebook-demo/blob/master/tab/includes/facebook-js-sdk-init.php">Source code to initialize the Javascript SDK. </a> </p>
    <p></p>
    <h3>Getting the user logged in to the app</h3>
    <p>Reasons why you would need to log the user in to the app include:</p>
    <ul>
        <li>Getting the user's Facebook ID</li>
        <li>Performing some type of Facebook API interaction that requires approval from the user</li>
    </ul>
    <p> There are two ways to log a user in to the app:</p>
    <h4>1. Overlay window</h4>
    <p>Achieved via Javascript SDK's Login() method. See source code for implementation.</p>
    <a class="login-overlay btn">Try it</a>
    <h4>2. Redirect to a Facebook-hosted login page</h4>
    <p>Achieved via PHP SDK's getLoginUrl() method. See source code for implementation.</p>
    <a class="login-redirect btn">Try it</a>
</div> <!-- /container -->
<?php require_once('includes/foot.php'); ?>
