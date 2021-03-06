run-frontend:
	cd frontend/web && php -S localhost:8888
run-backend:
	cd backend/web && php -S localhost:8899

message-frontend:
	php yii message frontend/messages/config.php
message-backend:
	php yii message backend/messages/config.php
message:
	make message-frontend && make message-backend

db-migrate:
	php yii migrate/up --migrationPath=@vendor/nullref/yii2-dialog/src/migrations && \
	php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations && \
	php yii migrate/up

vendors-update:
	composer update
vendors-install:
	composer install -o

test:
	php codecept.phar run
codecept-download:
	wget http://codeception.com/codecept.phar