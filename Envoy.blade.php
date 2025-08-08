@servers(['web' => ['ubuntu@54.197.38.215']], ['options' => '-o StrictHostKeyChecking=no'])
 
@story('deploy')
    update-code
    install-dependencies
	run-migrations
@endstory
 
@task('update-code')
    cd lab
    git pull origin main
@endtask
 
@task('install-dependencies')
    cd lab
    composer install --no-dev
@endtask

@task('run-migrations')
    cd lab
    php artisan migrate --force
@endtask