release: bin/cake migrations migrate && bin/cake schema_cache clear && bin/cake schema_cache build && npm run prod
web: vendor/bin/heroku-php-apache2 webroot/
