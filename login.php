<?php
    session_start();
    echo "Name: "  . $_SESSION['name'] . "<br/>";
    echo "Email: " . $_SESSION['email'] . "<br/>";
?>

Feel free to go to the <a href='/'>home</a> now.