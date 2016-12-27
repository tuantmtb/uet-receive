## Fluent's method not found in migration 
> https://github.com/barryvdh/laravel-ide-helper/issues/193

Added the following code to end of _ide_helper.php file. And the problem was solved.

    namespace Illuminate\Support{
        /**
         * @method Fluent first()
         * @method Fluent after($column)
         * @method Fluent change()
         * @method Fluent nullable()
         * @method Fluent unsigned()
         * @method Fluent unique()
         * @method Fluent index()
         * @method Fluent primary()
         * @method Fluent default($value)
         * @method Fluent onUpdate($value)
         * @method Fluent onDelete($value)
         * @method Fluent references($value)
         * @method Fluent on($value)
         */
        class Fluent {}
    }
    
    
## Windows scheduler
> http://stackoverflow.com/questions/36305146/how-to-run-task-scheduler-in-windows-10-with-laravel

The .bat file store at /config/schedule.bat 

## PHP soap extensions on Windows
> http://stackoverflow.com/questions/2509143/php-how-do-i-install-soap-extension

1: Find extension=php_soap.dll in php.ini and remove the semicolon(;)

2: Run these commands

        $ php --init
        $ composer update