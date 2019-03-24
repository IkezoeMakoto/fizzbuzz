init: vendor

DIR=./tests/
test: vendor
	./vendor/bin/phpunit $(DIR)
.PHONY: test

vendor:
	composer install