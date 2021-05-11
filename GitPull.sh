sudo git pull
sudo rm -rf vendor/
sudo composer install --optimize-autoloader --no-dev
sudo rm public/storage
sudo php artisan storage:link
sudo systemctl restart apache2
echo "###########Everything is working fine##########"
echo "Don t forget to check .env "
