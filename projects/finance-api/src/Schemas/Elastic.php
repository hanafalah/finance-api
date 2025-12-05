<?php

namespace Projects\FinanceApi\Schemas;

use Projects\FinanceApi\Jobs\JobRequest;
use Projects\FinanceApi\Contracts\Schemas\Elastic as SchemasElastic;

class Elastic implements SchemasElastic {
    protected $__client;
    protected array $__bulks = [
        'body' => []
    ];

    protected function bulks(array $bulks): array{
        return $this->__bulks['body'] = array_merge($this->__bulks['body'], $bulks);
    }

    public function run($client, ?array $attributes = null){
        $attributes ??= JobRequest::all();        
        switch ($attributes['type']) {
            case 'BULK':
                (new ElasticBulk)->run($client,$attributes);
            break;
        }
    }
}