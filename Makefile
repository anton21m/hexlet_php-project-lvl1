install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate || echo "Error validate"

lint: 
	composer exec phpcs -- --standard=PSR12 src bin