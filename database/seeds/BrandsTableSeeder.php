<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'php',
                'logo' => 'images/brands/php.png',
                'url' => 'http://www.php.net/'
            ],
            [
                'name' => 'laravel',
                'logo' => 'images/brands/laravel.png',
                'url' => 'https://laravel.com/'
            ],
            [
                'name' => 'composer',
                'logo' => 'images/brands/composer.png',
                'url' => 'https://getcomposer.org/'
            ],
            [
                'name' => 'npm',
                'logo' => 'images/brands/npm.png',
                'url' => 'https://www.npmjs.com/'
            ],
            [
                'name' => 'gulp',
                'logo' => 'images/brands/gulp.png',
                'url' => 'https://gulpjs.com/'
            ],
            [
                'name' => 'webpack',
                'logo' => 'images/brands/webpack.png',
                'url' => 'https://webpack.js.org/'
            ],
            [
                'name' => 'git',
                'logo' => 'images/brands/git.png',
                'url' => 'https://git-scm.com/'
            ],
            [
                'name' => 'trello',
                'logo' => 'images/brands/trello.png',
                'url' => 'https://trello.com/'
            ],
            [
                'name' => 'github',
                'logo' => 'images/brands/github.png',
                'url' => 'https://github.com/'
            ],
            [
                'name' => 'mysql',
                'logo' => 'images/brands/mysql.png',
                'url' => 'https://www.mysql.com/'
            ],
            [
                'name' => 'jquery',
                'logo' => 'images/brands/jquery.png',
                'url' => 'https://jquery.com/'
            ],
            [
                'name' => 'bootstrap',
                'logo' => 'images/brands/bootstrap.png',
                'url' => 'https://getbootstrap.com/'
            ],
            [
                'name' => 'sass',
                'logo' => 'images/brands/sass.png',
                'url' => 'https://sass-lang.com/'
            ],
            [
                'name' => 'html5',
                'logo' => 'images/brands/html5.png',
                'url' => 'https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5'
            ],
            [
                'name' => 'css3',
                'logo' => 'images/brands/css3.png',
                'url' => 'https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3'
            ],
            [
                'name' => 'ubuntu',
                'logo' => 'images/brands/ubuntu.png',
                'url' => 'https://www.ubuntu.com/'
            ],
            [
                'name' => 'phpstorm',
                'logo' => 'images/brands/phpstorm.png',
                'url' => 'https://www.jetbrains.com/phpstorm/'
            ]
        ];

        DB::table('brands')->truncate();
        DB::table('brands')->insert($data);
    }
}
