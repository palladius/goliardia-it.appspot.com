<?php

// from redirect to hello

if($_SERVER['REQUEST_URI'] =="/redirect") {
  header( "HTTP/1.1 301 Moved Permanently" );
  // header( "Location: https://goliardia-it.googleplex.com/hello" );
  header( "Location: /hello" );
  exit;
}
