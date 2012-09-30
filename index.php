<?php

/**
 * This script at the root of the application serves only to redirect to the tab page url.
 * The page that is loaded in the Facebook iframe is /tab/index.php in this application.
 *
 * The tab page url should come from some server-side configuration source.
 * I used .htaccess for this demo with the following rule format:
 *
 * SetEnv PAGE_TAB_URL https://www.facebook.com/pages/Curtiss-Dev-Page/261002813970570?sk=app_150038811807640
 */

header('Location: ' . getenv('PAGE_TAB_URL'));