# Web PASCA - UNESA

This is the source code for the PascaSarjana - UNESA Surabaya. It is a website with a blog application. It also includes full authentication and file uploading, file manager with CKEditor and many more.

## Database
The sql dump is in _SQL/pasca.sql


## Installation

1. You may install by cloning from github.
  * Github:
    * `git clone https://github.com/wachidmudi/pasca.git`
    * From a command line open in the folder, run `composer install`.
2. Copy .env.example file into .env and configure with your own environment .
3. Run the migration or just dump pasca.sql file at _SQL folder:
   * For migration run . 
   	 `php artisan migrate`
4. Link storage to public folder with `php artisan storage:link`.
5. Finally!
  * For development, you can simply run `php artisan serve`

## Username & Password
Default User and Pass, if you do sql dump 
Username : alex@doe.com
Password : password

## Deploy on Nginx Server CentOS

Install php-gd.
* Run `sudo yum install php-gd`
* Install additional localization using `sudo locale-gen <NEW LOCALE>`, if Indonesian (id) language doesn't exist then carbon will use default language which is English (en) 
  *  Use `locale -a` on your production server terminal to check which supported locales you have installed.

## Version
1.0.0
