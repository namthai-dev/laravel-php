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
