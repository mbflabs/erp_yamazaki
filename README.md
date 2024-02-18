1. Clone Repository

git clone https://github.com/mbflabs/erp_yamazaki

2. Go into the repository

cd erp_yamazaki

3. Install Packages

composer install

4. Copy .env file

cp .env.example .env

5. Generate app key

php artisan key:generate

6. Setting up your database credentials in your .env file.

7. Seed Database:

php artisan migrate:fresh --seed

8. Create Storage Link

php artisan storage:link

9. Install NPM dependencies

npm install && npm run dev

10. Run

php artisan serve

login:
admin@admin.com

password:
password
