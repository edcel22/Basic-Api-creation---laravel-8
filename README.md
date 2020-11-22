Test
- return all the data from a db table using laravel
- return a specific data by id from db table

Note:
	model - use to connect relationships of the tables
	controller - the query and logic of the laravel project
	route - url

//
GET 
	- when we want to get data from backend to frontend
	- use to fetch the data.
POST
	- when we inserting new values in the database.

PUT 
	- put method is use when updating an existing value in the database.
Delete method 
	- is a standard for deleting data from db
	- actully we can delete data using get, post and put method. but the standard is delete method	
Question:
	How to delete multiple record in an api

API VALIDATION
	- means if the does not pass some proper values to the api, then we need to show some error message like password is not proper
	steps:
		Make route
		add validations
		save and return result

	make controller with resource
		php artisan make:controller Member --resource

AUTHENTICATE API USING sanctum
	- authentication is how we can secure our apis from the unauthorize person.
	steps:
		- install and configure sanctum
		- we need migration with the database and make controller
		- examples with api 
		- test api 

	visit this url for documentation: https://github.com/anil-sidhu/laravel-sanctum
	steps: 
		1. setup database with sanctum
		2. install laravel sanctum  - composer require laravel/sanctum
		3. publish the sanctum configuration and migration files.
		php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
			this will generate some configuration in config folder and migration also named create_personal_...


	* theres a lot of authentication library like jwt, passport, sanctum
	 sanctum is only work for the same domain name only
	 passport is the best approach for any kind of API Authentication. Especially, if you want to consume API for a mobile app or from other domain.
