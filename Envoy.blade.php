@servers(['main' => ['geozhur@82.146.39.214']])


@setup
@endse
@task('deploy', ['on' => 'main'])
    cd /data/geozhur/www/
    php artisan down
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
