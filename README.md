Synopsis
========

This is about installing GAE+PHP+CloudSQL Mediawiki, basically my dream.

Instructions
============

Install the google-appengine for PHP framework.

Then follow this:


- create a cloud project on cloud.google.com/console, enable billing, configure cloud sql
- make sure you have a working php app for that project 
- download latest mediawiki
- download the app engine php sdk
- use this app.yaml
- deploy it using google_appengine_php/appcfg.py -R update --oauth2 .
- set the newly deployed version as the default version
- visit goliardia-it.appspot.com/index.php and go through the setup procedure, when asked for the mysql host use: :/cloudsql/my-project-name:my-cloudsql-instance
- at the end of the process download LocalSettings.php and copy it to your application directory
- re-deploy using google_appengine_php/appcfg.py -R update --oauth2 .
- visit your new wiki at goliardia-it.appspot.com/index.php

My data
=======

AppName: s~goliardia-it
CloudSQL: google.com:biglamp:phptest1-mediawiki


Thanks
======

- My mum
- proppy@
