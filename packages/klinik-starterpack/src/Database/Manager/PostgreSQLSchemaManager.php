<?php

declare(strict_types=1);

namespace Hanafalah\KlinikStarterpack\Database\Manager;

use Hanafalah\MicroTenant\Models\Tenant\Tenant;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;
use Stancl\Tenancy\Contracts\TenantDatabaseManager;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Exceptions\NoConnectionSetException;

class PostgreSQLSchemaManager implements TenantDatabaseManager
{
    /** @var string */
    protected $connection;

    protected function database(): Connection
    {
        if ($this->connection === null) {
            throw new NoConnectionSetException(static::class);
        }

        return DB::connection($this->connection);
    }

    public function setConnection(string $connection): void
    {
        $this->connection = $connection;
    }

    public function createDatabase(TenantWithDatabase $tenant): bool
    {
        if (isset($tenant->flag)){
            switch ($tenant->flag) {
                case Tenant::FLAG_TENANT:
                    return $this->database()->statement("CREATE DATABASE \"{$tenant->database()->getName()}\"");
                break;
                case Tenant::FLAG_CLUSTER:
                    return DB::connection($tenant->connection_name)->statement("CREATE SCHEMA \"{$tenant->database()->getName()}\"");
                break;
                default:
                    return $this->database()->statement("CREATE SCHEMA \"{$tenant->database()->getName()}\"");
                break;
            }
        }else{
            switch ($this->connection) {
                case 'tenant':
                case 'central':
                    return $this->database()->statement("CREATE DATABASE \"{$tenant->database()->getName()}\"");
                break;
                default:
                    return $this->database()->statement("CREATE SCHEMA \"{$tenant->database()->getName()}\"");
                break;
            }
        }
    }

    public function deleteDatabase(TenantWithDatabase $tenant): bool
    {
        if (isset($tenant->flag)){
            switch ($tenant->flag) {
                case Tenant::FLAG_TENANT:
                    return $this->database()->statement("DROP DATABASE \"{$tenant->database()->getName()}\"");
                break;
                case Tenant::FLAG_CLUSTER:
                    return DB::connection($tenant->connection_name)->statement("DROP SCHEMA \"{$tenant->database()->getName()}\" CASCADE");
                break;
                default:
                    return $this->database()->statement("DROP SCHEMA \"{$tenant->database()->getName()}\" CASCADE");
                break;
            }
        }else{
            switch ($this->connection) {
                case 'tenant':
                case 'central':
                    return $this->database()->statement("DROP DATABASE \"{$tenant->database()->getName()}\"");
                break;
                default:
                    return $this->database()->statement("DROP SCHEMA \"{$tenant->database()->getName()}\" CASCADE");
                break;
            }
        }
    }

    public function databaseExists(string $name): bool
    {
        return (bool) $this->database()->select("SELECT schema_name FROM information_schema.schemata WHERE schema_name = '$name'");
    }

    public function makeConnectionConfig(array $baseConfig, string $databaseName): array
    {
        $baseConfig['search_path'] = $databaseName;
        // if ($this->connection == 'central'){
        // }else{
        //     $baseConfig['database'] = $databaseName;
        //     $baseConfig['search_path'] = 'public';
        // }
        return $baseConfig;
    }
}
