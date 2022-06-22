.PHONY: up clean

up:
	composer install -noa
	docker-compose up -d --build

clean:
	docker-compose stop
	docker-compose rm -f
	rm -rf _data/ vendor/
