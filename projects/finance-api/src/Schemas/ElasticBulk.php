<?php

namespace Projects\FinanceApi\Schemas;

use Projects\FinanceApi\Contracts\Schemas\ElasticBulk as SchemasElasticBulk;

class ElasticBulk extends Elastic implements SchemasElasticBulk {
    public function run($client,?array $attributes = null){
        $bulks = [];
        foreach ($attributes['datas'] as $datas) {
            foreach ($datas['data'] as $data) {
                $bulks[] = [
                    'index' => [
                        '_index' => $datas['index'],
                        '_id' => $data['id']
                    ]
                ];
                $bulks[] = $data;
            }
        }
        $this->bulks($bulks);
        $client->bulk($this->__bulks);
    }
}