install
change your local DB settings in .env file (see .env.dist)
* docker-compose up
* docker-compose exec php bin/console doctrine:database:create
* docker-compose exec php bin/console doctrine:migrations:migrate
* docker-compose exec php bin/console event-store:event-stream:create

later
docker-compose exec php bin/console event-store:projection:run tab_projection

Fixing docker-compose up encore error:
 before you run that comand install npm:
 ```
sudo apt install npm
```

and then install the project:
```
npm install
```
 

Access application in the browser:
- http://localhost:18080/ - main app
- http://localhost:10088/ - adminer for mysql
