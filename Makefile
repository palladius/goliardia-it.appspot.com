deploy-remote:
	~/google_appengine_php/appcfg.py -R update --oauth2 .
deploy-local:
	~/google_appengine_php/dev_appserver.py --php_executable_path=/usr/bin/php .
