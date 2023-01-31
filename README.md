# ExoMVC_Entreprise

## Requirements

os = Windows11  
wampserver 3.30 -Php-8.1 MySQ-L8.0 Apache-2.4.51 MariaDb-10.6 PhpMyAdmin-5.2.0  
Laravel 9.48.0

ExoMVC_Entreprise  
Commencer par rentrer dans le projet en faisant "cd MVCentreprise".  
Pour lancer le projet n'oubliez pas de créer une base de donnée reprenant l'exemple du .env.example.  
Ensuite faite cp .env.example .env afin de setup l'environnement pour le site.  
Composer install pour installer le vendor si celui ci n'est pas présent.  
Lancer les migrations avec php artisan migrate.
Ensuite avec php artisan serve le projet vous demandera de générer une clé. Laissez le générer la clé ou
sinon faite php artisan generate:key.
