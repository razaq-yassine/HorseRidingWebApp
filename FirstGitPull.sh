git pull
rm -rf vendor/
composer install --optimize-autoloader --no-dev
rm public/storage
php artisan storage:link
php artisan key:generate
cp .env.example .env
chown -R www-data:www-data $(pwd)/vendor
chown -R www-data:www-data $(pwd)/storage
systemctl restart apache2
echo "###########Everything is working fine##########"
echo -e "Don't forget if you changed \e[5m env to run systemctl restart apache2"
