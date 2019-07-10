<?php
namespace Rupalipshinde\TemplateWithLocalization;
use Illuminate\Support\ServiceProvider;
class TemplateWithLocalizationServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/template_with_localization.php' => config_path('template_with_localization.php'),
                ], 'template_with_localization');
        
        $this->publishes([
            __DIR__ . '/lang' => resource_path('lang'),
        ]);

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ]);

      
    }
    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/template_with_localization.php',
            'template_with_localization'
        );
    }
}
