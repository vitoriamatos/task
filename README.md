# Task App


<h4 align="center"> 
	🚧  Project Status: 🛠 Finish  🚧
</h4>

Minimalistic custom taks list for educational purposes.


* HOME PAGE
![homepage](/assets/workspace2.png)
* REGISTER PAGE
![workspace](/assets/workspace1.png)


## Requirements

1. You need to have Xampp installed, if you don't have [click here](https://www.apachefriends.org/download.html) for download
2. You need to have PHP8.2 installed
3. You need to have Postegree installed

## Installation

1. Download the archive or clone the project using git
    * As we are using Xampp, you need to clone the project in the folder where Xampp is installed, but precisely in the htdocs folder, exemple: `C:\xampp\htdocs`

2. You need create database schema called `tasks` in pgAdmin 4 and create a table called `task`
    * in the root project have a file called `database.sql` you can used for create a table
3. IN `.env` file adjust database parameters (including schema name)
4. Run `composer install`
5. Start a Apache Server in Xampp Aplication
6. Open in browser http://localhost/task/public/


<hr>

> Credits: This project is based on a code structure provided by the author [TheCodeholic](https://github.com/thecodeholic) and you can see the original structure in this repository: [php-mvc-framework](https://github.com/thecodeholic/php-mvc-framework).
