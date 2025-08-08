@servers(['web' => ['ubuntu@54.197.38.215']])
 
@story('deploy')
    update-code
    install-dependencies
	run-migrations
@endstory
 
@task('update-code')
    cd lab
    git pull origin master
@endtask
 
@task('install-dependencies')
    cd lab
    composer install --no-dev
@endtask

@task('run-migrations')
    cd lab
    php artisan migrate --force
@endtask