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

