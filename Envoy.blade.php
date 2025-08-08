@servers(['web' => ['ubuntu@3.95.19.8']])
 
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
    composer install --no-dev --ignore-platform-reqs
@endtask

@task('run-migrations')
    cd lab
    php artisan migrate --force
@endtask