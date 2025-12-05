<?php

namespace Projects\FinanceGateway;

use Hanafalah\LaravelSupport\{
    Concerns\NowYouSeeMe,
    Supports\PathRegistry
};
use Projects\FinanceGateway\{
    FinanceGateway,
    Providers,
};

class FinanceGatewayServiceProvider extends FinanceGatewayEnvironment
{
    use NowYouSeeMe;

    public function register()
    {
        $this->registerMainClass(FinanceGateway::class,false)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers('*');
    }

    public function boot(){      
        $this->app->booted(function(){
            $this->app->singleton(PathRegistry::class, function(){
                $registry = new PathRegistry();

                $config = config("finance-gateway");
                foreach ($config['libs'] as $key => $lib) $registry->set($key, 'projects'.$lib);
                
                return $registry;
            });

        });
    }    
}
