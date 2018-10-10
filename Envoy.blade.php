@servers(['sov' => ['yasitijb@server243.web-hosting.com -p21098']])

@story('deploy')

    introduction

    git

    assets

    composer

    conclusion

@endstory

@task('introduction')

    cd sandofvega.com

    php artisan down

    cd ../public_html

    rm -Rf css fonts img js error_log

    cd ../sandofvega.com

@endtask

@task('git')

    git pull origin master

@endtask

@task('assets')

    cd public

    mv css fonts images js ../../public_html/

    cd ..

    rm -Rf public

@endtask

@task('composer')

    composer install

@endtask

@task('conclusion')

    php artisan up

    php artisan config:cache

    php artisan route:cache

@endtask