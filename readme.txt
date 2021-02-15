1. Install iTerm2 (recommended) or use thr default terminal program
2. Create folder in appropiate directory
3. git clone 
4. Inside the project, create a .env at the root directory
5. Copy everything from the .env.example into the .env
6. Replace the database section in the .env with the following code:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=e-sunglasses
DB_USERNAME=root
DB_PASSWORD=root

7. Install MAMP (free version)
8. Start MAMP local server

9. Install SequelPro
10. Create a database called "e-sunglasses"

11. In iTerm2 inside the project, run "composer install" to ensure all dependencies are up to date
12. Then run "php artisan migrate:refresh --seed" - the database tables should appear and should be populated with the sunglasses data (in the "products" table). 10 user accounts have been generated with the login format of "userNUMBER@googlemail.com" with the password of "password"