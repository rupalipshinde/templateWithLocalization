<?php
namespace Src;
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
            __DIR__.'/../config/template_with_localization.php' => config_path('template_with_localization.php'),
        ], 'template_with_localization-config');
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
