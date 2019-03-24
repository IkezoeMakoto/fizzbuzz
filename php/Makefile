init: vendor

check: lint test

TEST_DIR=./tests/
test: vendor
	./vendor/bin/phpunit $(TEST_DIR)
.PHONY: test

SRC_DIR=./src/
lint: vendor
	./vendor/bin/phpcs --standard=PSR2 $(SRC_DIR)
.PHONY: lint

vendor:
	composer install