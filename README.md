## Project Setup

To set up and run the project, follow the commands below:
```bash

composer install

# Check Symfony Version here
php bin/console --version

# Clear Cache
php bin/console cache:clear

# Create database and update schema
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force

# load fixtures
php bin/console doctrine:fixtures:load

# Run our application
symfony server:start
```
