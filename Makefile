install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

validate:
	composer validate || echo "Error validate"

lint: 
	composer run-script phpcs -- --standard=PSR12 src bin