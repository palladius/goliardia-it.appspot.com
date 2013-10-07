<?php
    // _header.php
    session_start();
    $_SESSION['user'] = 'foo';

    $version = "1.5b";
?>

<div class='header'>
Welcome to PHP Test v<b><? echo $version ?></b>
[

  <a href='/index.php'>index.php</a> |
  <a href='/hello'>hello</a> |
  <a href='/hello2'>hello2</a> |
  <a href='/login'>login</a> |
  <a href='/redirect'>redirect</a> |
  <a href='/user'>user</a> |
  <a href='/VERSION'>VERSION</a> |

  <a href='/mw-config/index.php'>Configure Mediawiki</a> |
  

]

You are <b class='user'>'
<?php
  print $_SESSION['Foo'];
?>'</b>

</div>