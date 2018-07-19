### Installation
* git clone https://github.com/lvntayn/laravel-social-network.git projectname
* cd projectname
* composer install
* php artisan key:generate to regenerate secure key
* create new database and edit .env file for DB settings
* php artisan migrate —seed
* edit .env file for APP configuration and Google API Configuration
* storage, bootstrap/cache and public/cache directories should be writable
* php artisan storage:link
* php artisan serve

### Requirements
* PHP 5.6.4
* MySQL
