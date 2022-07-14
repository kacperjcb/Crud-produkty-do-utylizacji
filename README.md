How to install: <br>
Clone repository <br>
use commands: <br>
composer install <br>
php bin/console doctrine:database:create <br>
php bin/console make:migration <br>
php bin/console doctrine:migrations:migrate <br>
symfony serve <br>
Use "Rejestracja" Button for register. <br>
If you want to make admin account you need to change roles entity in database to ["ROLE_ADMIN"]
