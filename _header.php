<?php
    // _header.php
session_start();

date_default_timezone_set('Europe/Zurich');

require_once 'google/appengine/api/users/UserService.php';

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();
$name= $user->getNickname();
$name = explode("@",$name)[0];
//$name[0]= ucfirst($name[0]);
//$name[1]= ucfirst($name[1]);
//$name = $name[0]." ".$name[1];

$appname = "goliardia-it (php test)";
$version = "1.11"; // (TODO read from VERSION)

// start with sessions.
$_SESSION['name']=$name;
$_SESSION['user']=$name;
$_SESSION['email']= getenv('USER_EMAIL');
$_SESSION['user2'] = 'foo';

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