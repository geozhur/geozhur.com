test:
	composer run phpunit

setup: env-prepare sqlite-prepare install key

install:
	composer install
	npm install

start:
	heroku local -f Procfile.dev

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

analyse:
	composer exec phpstan analyse -v -- --memory-limit=-1

lint:
	composer exec phpcs -v

lint-fix:
	composer exec phpcbf -v

deploy:
	git push heroku master

env-prepare:
	cp -n .env.example .env || true

sqlite-prepare:
	touch database/database.sqlite

key:
	php artisan key:generate

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n

lint-js:
	npm run lint-js

lint-js-fix:
	npm run lint-js-fix

.PHONY: test
