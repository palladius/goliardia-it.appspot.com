deploy-remote:
	~/google_appengine/appcfg.py -R update --oauth2 .
deploy-local:
	echo Try this: open http://localhost:4000/hello
	~/google_appengine/dev_appserver.py --php_executable_path=/usr/bin/php --port 4000 .
