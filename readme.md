# UET Receive

> Develop website : Receive results from UET examination

## Version
Status: Alpha version

Start date: 26/12/2016 

Submission date: 18/12/2016

## Structure

Resource doc: /uet-resource-doc

## Document

Detailed guides in /uet-resource-doc older.

Design database at /uet-resource-doc/database/Design.png


## Technology Overview
Bootstrap

Jquery

Laravel 5

## Requirement system

PHP 5.4 above

Support cron job

## Deployment

1. Create database
      
2. Config file .env
        
        - Config database
        - Mailer account
        - Generate key
        $ php artisan key:generate

3. Install

Install manual

        $ composer update
        $ composer install
        $ php artisan key:generate
        $ php artisan migrate --seed
        $ php artisan serve
        
        - Open browser localhost:8080
        
4. Account user

        Admin account: 
        
## Development

#### Step 1: Install Composer
            
            $ composer update
            $ composer install
            
#### Step 2: Database & migration
            
            Tạo database uet-thesis
            Copy .env.example > .env, cấu hình lại DB, MAIL, google captcha 
            $ php artisan migrate --seed
            
            Generate ide-helper: 
            $ php artisan ide-helper:models
            
#### Step 3: Configurations

            $ php artisan key:generate

#### Step 4: Serve

            $ php artisan serve

#### Step 5: Start job
            
            $ php artisan schedule:run >> /dev/null 2>&1
                
## Common problem

1. Can not seed migrate:
            
            edit ".env": set CACHE_DRIVER=array
            $ php artisan config:cache
            $ php artisan migrate:refresh --seed
                        
            $ composer dump-autoload
            $ php artisan db:seed hoặc $ php artisan migrate:refresh --seed
            
2. Form can not post data:

            Add {{Form::token()}} in form view
            
## PhpStorm plugin instructions
    
            Settings > Plugins > Browse repositories... > Tìm 'Laravel plugin' > Cài 
            Settings > Languages and Frameworks > Php > Laravel > Bật 'Enable plugin for this project'
            
## TODO

    Update score student
    Analytic result score
    Recommend subject
      
      
## Library

Composer.json:

        {
            "pda/pheanstalk": "^3.1",
            "zizaco/entrust": "5.2.x-dev",
            "barryvdh/laravel-debugbar": "^2.3",
            "barryvdh/laravel-ide-helper": "^2.2",
            "doctrine/dbal": "^2.5",
            "artisaninweb/laravel-soap": "0.3.*"
            "anhskohbo/no-captcha":...

            
        }

## Developers

Tran Minh Tuan - UET - tuantmtb@gmail.com - +84.976.200.663

Nguyen Van Nhat - UET - nguyenvannhat152@gmail.com - +84.166.3077313