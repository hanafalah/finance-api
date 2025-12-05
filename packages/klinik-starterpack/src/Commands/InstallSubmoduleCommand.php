<?php

namespace Hanafalah\KlinikStarterpack\Commands;

use Hanafalah\KlinikStarterpack\Concerns\HasComposer;
use Illuminate\Support\Str;
class InstallSubmoduleCommand extends EnvironmentCommand
{
    use HasComposer;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'klinik-starterpack:install-submodule';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for initial installation of this module';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // if (app()->environment('local')) {
        //     foreach (config('klinik-starterpack.packages') as $package) {
        //         $module      = $package['repository'];
        //         $module_name = Str::afterLast("{$module}", '/');
        //         if (!is_dir("repositories/{$module_name}")) {
        //             shell_exec("git submodule add -f https://gitlab.com/{$module}.git repositories/{$module_name}");
        //         }
        //     }
        //     $this->updateComposer(base_path('composer.json'), __DIR__.'/../../repositories.json', 'repositories');
        //     // shell_exec('rm -rf composer.lock');
        //     // shell_exec('composer install');
    
        //     // $this->appSubmodule('project','klinik')
        //     //      ->appSubmodule('group','group-initial-klinik')
        //     //      ->appSubmodule('tenant','tenant-klinik');
    
        //     shell_exec("git submodule foreach 'git checkout main' && git pull || true");
        // }

    }

    private function appSubmodule(string $path, string $module_name): self{
        $path = config("laravel-package-generator.patterns.$path.published_at");
        $path = preg_replace('/^' . preg_quote(base_path().'/', '/') . '/', '', $path, 1);
        if (!is_dir("{$path}/{$module_name}")) {
            shell_exec("git submodule add -f https://gitlab.com/micro-tenant/{$module_name}.git {$path}/{$module_name}");
        }
        return $this;
    }
}
