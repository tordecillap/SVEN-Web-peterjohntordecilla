# SVEN-Web-peterjohntordecilla

after cloning go to root location

-   cp .env.example .env
-   php artisan key:generate
-   composer install

Edit the .env file and update the database settings:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

-   php artisan migrate
-   php artisan serve
