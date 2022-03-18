@servers(['main' => ['geozhur']])


@setup
@endsetup
@task('deploy', ['on' => 'main'])
    cd /data/geozhur/www/
    git checkout master
    git pull
    composer install --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
    php artisan migrate --force
    php artisan cache:clear
    php artisan config:cache
    npm install
    npm run prod
    php artisan up
@endtask

