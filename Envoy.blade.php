@servers(['main' => ['geozhur']])


@setup
@endsetup
@task('deploy', ['on' => 'main'])
    cd /data/geozhur/www/
    php artisan down
    git checkout master
    git reset --hard HEAD;git clean -df
    git pull
    composer install --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
    composer dumpautoload
    php artisan migrate --force
    php artisan optimize:clear
    npm install
    npm run prod
    php artisan up
@endtask

