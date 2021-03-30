install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate || echo "Error validate"