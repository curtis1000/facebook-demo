<?php
require_once('includes/bootstrap.php');
require_once('includes/facebook-php-sdk-init.php');
require_once('includes/head.php');
?>
<body>

<div class="container">

    <h1>Curt&#146;s Facebook Demo App</h1>
    <hr />
    <h3><a target="_blank" href="https://github.com/curtis1000/facebook-demo">This entire application is on GitHub.</a></h3>
    <hr />
    <h3>Public Pages</h3>
    <p>It is entirely in the programmer's control to determine which pages are public to the world and which pages require
    the user to be logged in.</p>
    <p>This page is public to the world. Users are not required to be logged in to the app, nor do they even need
    to be logged in to Facebook to see this page. A Marketer could safely reference this page's url in banner ads or email
    campaigns.</p>
    <hr />
    <h3>SDK Setup</h3>
    <p>This demo uses the Javascript SDK and the PHP SDK.</p>
    <ul>
    <li><a target="_blank" href="https://github.com/curtis1000/facebook-demo/blob/master/tab/includes/facebook-js-sdk-init.php">Source code to initialize the Javascript SDK.</a></li>
    <li><a target="_blank" href="https://github.com/curtis1000/facebook-demo/blob/master/tab/includes/facebook-php-sdk-init.php">Source code to initialize the PHP SDK.</a></li>
    </ul>
    <hr />
    <h3>Logging the user in and out of the app</h3>
    <p>Reasons why you would need to log the user in to the app include:</p>
    <ul>
        <li>Getting the user's Facebook ID</li>
        <li>Performing some type of Facebook API interaction that requires approval from the user</li>
    </ul>
    <p> Here's how to do it:</p>
    <h4>1. Javascript SDK</h4>
    <ul>
        <li>First we will check if the user is logged in via FB.getLoginStatus, and only display the login overlay if necessary.</li>
        <li>Login is presented, if necessary, in a modal window over the app via FB.Login method.</li>

        <li><a target="_blank" href="https://github.com/curtis1000/facebook-demo/blob/master/tab/assets/scripts/facebook-js-login.js">See source code for implementation.</a></li>
    </ul>
    <a class="js-login btn">Try it</a>
    <div class="js-login-result"></div>
    <br />
    <h4>2. Redirect to a Facebook-hosted login page</h4>
    <p>Achieved via PHP SDK's getLoginUrl() method. See source code for implementation.</p>
    <a class="login-redirect btn">Try it</a>
</div> <!-- /container -->
<?php require_once('includes/foot.php'); ?>
