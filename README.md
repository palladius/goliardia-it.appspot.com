Synopsis
========

This is about installing GAE+PHP+CloudSQL Mediawiki, basically my dream.

Instructions
============

Install the google-appengine for PHP framework.

Then follow this:


- create a cloud project on cloud.google.com/console, enable billing, configure cloud sql
- make sure you have a working php app for that project (lifeguard move appid labs, edit UserAccount in admin-console-hr to add php in the allowed runtime override, setvalue request_deadline_s 120)
- download latest mediawiki
- download the app engine php sdk
- use this app.yaml
- deploy it using google_appengine_php/appcfg.py -R update --oauth2 .
- set the newly deployed version as the default version instead of ah-empty (because of b/9151588)
- visit yourappid.appspot.com/index.php and go through the setup procedure, when asked for the mysql host use: :/cloudsql/my-project-name:my-cloudsql-instance
- at the end of the process download LocalSettings.php and copy it to your application directory
- re-deploy using google_appengine_php/appcfg.py -R update --oauth2 .
- visit your new wiki at yourappid.appspot.com/index.php

My data
=======

AppName: google.com:phptest1
CloudSQL: google.com:biglamp:phptest1-mediawiki


Thanks
======

- My mum
- proppy@
