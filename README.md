# laravel-php

Web app built with laravel framework

## Prerequisites:

Install sqlite driver

	sudo apt-get install php-sqlite3

## Setup

Run these commands below:

	composer install
	
	cp .env.example .env

	php artisan key:generate

	php artisan config:cache

Update the absolute path for sqlite.database (DB_DATABASE)

To create all the nessesary tables and columns, run the following

	php artisan migrate

To add the dummy data, run the following

	php artisan db:seed

## How to run

    php artisan serve

## References

Create listings database migration

	php artisan make:migration create_listings_table

Create a listing model

	php artisan make:model Listing

Create listing factory

	php artisan make:factory ListingFactory

Migration refresh

	php artisan migrate:refresh

Migration refresh and create dummy data

	php artisan migrate:refresh --seed

Create a controller

	php artisan make:controller ListingController

Add clockwork

	composer require itsgoingd/clockwork

Publish package

	php artisan vendor:publish          

Link storage to public folder

	php artisan storage:link

Open Laravel Tinker

	php artisan tinker

## Screenshots

![image](https://github.com/namthai-dev/laravel-web-app/assets/102452878/f9d978bd-6394-4bc2-90fd-2af7c5f867c3)

![image](https://github.com/namthai-dev/laravel-web-app/assets/102452878/4a310b84-ca03-4409-a058-3fcbf4dc6144)

![image](https://github.com/namthai-dev/laravel-web-app/assets/102452878/d08b4caf-1d31-46fd-b81a-0792eca4220c)

![image](https://github.com/namthai-dev/laravel-web-app/assets/102452878/94028b86-14df-4733-a7c0-d62fa694c9fa)

![image](https://github.com/namthai-dev/laravel-web-app/assets/102452878/d5fc907f-ddb8-474a-b6ad-5060973c5c23)

![image](https://github.com/namthai-dev/laravel-web-app/assets/102452878/e0f390d9-ff3d-4c55-8d8b-afff78c1ad5e)
