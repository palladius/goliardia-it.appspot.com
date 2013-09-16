<?php

// from redirect to hello

if($_SERVER['REQUEST_URI'] =="/redirect/") {
  header( "HTTP/1.1 301 Moved Permanently" );
  header( "Location: https://phptest1.googleplex.com/hell://phptest1.googleplex.com/hello" );
  exit;
}
