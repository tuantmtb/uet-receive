## Fluent's method not found in migration 
I added the following code to end of _ide_helper.php file. And the problem was solved.

https://github.com/barryvdh/laravel-ide-helper/issues/193

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