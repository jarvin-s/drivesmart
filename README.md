# Gilde Opleidingen | Software Developer
### Final project - DriveSmart

DriveSmart is a web-app focused on managing driving lessons for students and instructors.

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/11.x/installation)

Clone the repository

    git clone https://github.com/jarvin-s/drivesmart.git

Switch to the repo folder

    cd drivesmart

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**tl;dr command list**

    git clone https://github.com/jarvin-s/drivesmart.git
    cd laravel-realworld-example-app
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve
    
## Tech Stack

DriveSmart is built with the following technologies:

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
  
## License

[MIT](https://choosealicense.com/licenses/mit/)
