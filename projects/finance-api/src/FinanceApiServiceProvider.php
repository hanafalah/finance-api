<?php

namespace Projects\FinanceApi;

use Hanafalah\LaravelSupport\{
    Concerns\NowYouSeeMe,
    Supports\PathRegistry
};
use Projects\FinanceApi\{
    FinanceApi,
    Providers,
};

class FinanceApiServiceProvider extends FinanceApiEnvironment
{
    use NowYouSeeMe;

    public function register()
    {
        $this->registerMainClass(FinanceApi::class,false)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers('*');
    }

    public function boot(){      
        $this->app->booted(function(){
            $this->app->singleton(PathRegistry::class, function(){
                $registry = new PathRegistry();

                $config = config("finance-api");
                foreach ($config['libs'] as $key => $lib) $registry->set($key, 'projects'.$lib);
                
                return $registry;
            });

        });
    }    
}
