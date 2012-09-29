<!-- this snippet goes in the body -->
<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
    FB.init({
        appId      : '<?php echo getenv('APP_ID'); ?>', // App ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        oauth      : true,
        frictionlessRequests: true // for app invites
    });
    FB.Canvas.setSize({height:600});
    setTimeout("FB.Canvas.setAutoGrow()",500);
    FB.Canvas.scrollTo(0,0);
</script>