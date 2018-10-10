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

    rm -Rf css fonts images js error_log

@endtask

@task('git')

    cd sandofvega.com

    git checkout .

    git pull origin master

@endtask

@task('assets')

    cd sandofvega.com/public

    mv css fonts images js ../../public_html/

    cd ..

    rm -Rf public

@endtask

@task('composer')

    cd sandofvega.com

    composer install

@endtask

@task('conclusion')

    cd sandofvega.com

    php artisan config:cache

    php artisan route:cache

    php artisan up

    echo -e "\e[92mYour website Deployed Successfully."

@endtask