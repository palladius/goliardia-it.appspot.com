<?php
    // _header.php
session_start();
date_default_timezone_set('Europe/Zurich');

$appname = "goliardia-it (php test)";
$version = "1.12"; // (TODO read from VERSION)

$username = $name or "_anonymous_" ;
// start with sessions.
#$_SESSION['name']=$name;
$_SESSION['user'] = $username ; 
$_SESSION['email']= getenv('USER_EMAIL');

?>

<div class='header'><center>
[

  <a href='/'>/</a> |
  <a href='/index.php'>index.php (mw)</a> |
  <a href='/hello'>hello</a> |
  <a href='/hello2'>hello2</a> |
  <a href='/login.php'>login.php</a> |
  <a href='/redirect'>redirect</a> |
  <a href='/req'>req</a> |
  <a href='/user'>user</a> |
  <a href='/VERSION'>VERSION</a> |

  <a href='/mw-config/index.php'>Configure Mediawiki</a> |
  

]

You are <b class='user'>'
<?php
  print $_SESSION['user'];
?>'</b>

<br/>

</center>
</div>