# Crud-produkty-do-utylizacji
CRUD który pozwala na zarządzanie produktami które trafiają do utylizacji. Możemy wpisać nazwę produktu, numer seryjny, datę produkcji produktu oraz przewidywaną datę kiedy jakiś produkt ma trafić do utylizacji. 
How to install: <br>
Clone repository <br>
use command: <br>
composer install <br>
php bin/console doctrine:database:create <br>
php bin/console make:migration <br>
php bin/console doctrine:migrations:migrate <br>
symfony serve <br>
Use "Rejestracja" Button for register. <br>
If you want to make admin account you need to change roles entity in database to ["ROLE_ADMIN"]
