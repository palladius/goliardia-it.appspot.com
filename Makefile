deploy-remote:
	~/google_appengine/appcfg.py -R update --oauth2 .

# v1.1.3
run-local:
	echo Try this: open http://localhost:4000/hello
	dev_appserver.py --php_executable_path=/usr/bin/php --port 4000 .

# deploy-local:
# 	echo Try this: open http://localhost:4000/hello
# 	~/google_appengine/dev_appserver.py --php_executable_path=/usr/bin/php --port 4000 .

push:
	git push

install-php:
	cd third-party/
	tar jxvf php-5.5.11.tar.bz2
	cd php-5.5.11/
	./configure --enable-bcmath && make && make install
	#sudo cp php
	echo Installed PHP locally

run-local-php:
	echo Try this: open http://localhost:4000/hello
	dev_appserver.py --php_executable_path=third-party/php-5.5.11/php --port 4000 .