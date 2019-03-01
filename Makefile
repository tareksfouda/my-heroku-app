
# sets up a new development environment
dev: composer up permissions migrate
	@echo "\nNOTE: if the proxy service is in the Exit 1 state, you will need to start the platform service."
	@echo "\nREADY!!!! \n\nVisit localhost:8080 to get started!"

# shuts down the containers
stop:
	docker-compose stop

# spins up the containers
up:
	docker-compose up -d

# helper to install composer dependencies
composer:
	docker run --rm --interactive --tty \
	--volume $(PWD):/app \
	--volume $SSH_AUTH_SOCK:/ssh-auth.sock \
	--volume /etc/passwd:/etc/passwd:ro \
	--volume ~/.ssh:/root/.ssh:ro \
	--volume /etc/group:/etc/group:ro --user $(id -u):$(id -g) \
	--env SSH_AUTH_SOCK=/ssh-auth.sock \
	composer install --ignore-platform-reqs

# clears igneous cache
cache-clear:
	docker-compose exec app php artisan cache:clear

# creates a network for the containers to talk
network:
	docker network create dealerservices-dev

# update file permissions
permissions:
	docker-compose exec app chmod -R 777 storage


# run migrations in the platform
migrate:
	docker-compose exec app php artisan migrate