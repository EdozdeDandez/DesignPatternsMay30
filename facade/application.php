<?php

$twitterObj = new CodetTwit();
$gooleObj   = new Googlize();
$redditObj  = new Reddiator();

$shareObj = new Shared($twitterObj,$gooleObj,$redditObj);

$shareObj->share('http://myBlog.com/post-awsome','My greatest post','Read my greatest post ever.');
?>