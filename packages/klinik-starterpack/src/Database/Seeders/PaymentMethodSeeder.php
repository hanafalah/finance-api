<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleExamination\Models\Form\Survey;
use Hanafalah\ModulePayment\Contracts\Data\PaymentMethodData;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    use HasRequestData;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name' => 'CASH',
                'flag' => 'PaymentMethod',
                'label' => 'TUNAI',
            ],
            // [
            //     'name' => 'Deposit',
            //     'flag' => 'PaymentMethod',
            //     'label' => 'DEPOSIT',
            // ],
            [
                'name' => 'Bank Transfer',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
                'form' => [
                    'label' => 'Bank Transfer',
                    'name'  => 'Pembayaran Bank',
                    'dynamic_forms'  => [
                        [
                            'label'          => 'Nama Bank',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ],
                        [
                            'label'          => 'Nomor Rekening',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'component_name' => null,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ],
                        [
                            'label'          => 'Atas Nama',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'component_name' => null,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ],
                        [
                            'label'          => 'Kode Transaksi',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ]
                    ]
                ]
            ],
            [
                'name' => 'Debit/Credit Card',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
                'form' => [
                    'label' => 'Debit/Credit Card',
                    'name'  => 'Pembayaran Kredit',
                    'dynamic_forms'  => [
                        [
                            'label'          => 'Nomor Kartu',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ],
                        [
                            'label'          => 'Tipe Kartu',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ],
                        [
                            'label'          => 'Tanggal Kadaluarsa',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ],
                        [
                            'label'          => 'Kode Transaksi',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'component_name' => null,
                            'default_value'  => null,
                            'attribute'      => null,
                            'rule'           => null,
                            'options'        => [
                            ]
                        ]
                    ]
                ]
            ],
            // [
            //     'name' => 'DEBIT CARD',
            //     'flag' => 'PaymentMethod',
            //     'label' => 'NON TUNAI',
            // ],
            [
                'name' => 'QRIS',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
                'form' => [
                    'label' => 'QRIS',
                    'name'  => 'Pembayaran QRIS',
                    'dynamic_forms'  => [
                        [
                            'label'          => 'No Telpon',
                            'key'            => 'value',
                            'component_name' => Survey::TYPE_INPUT_TEXT,
                            'component_name' => null,
                            'default_value'  => null,
                            'attribute'      => [
                                'mode'       => 'number'
                            ],
                            'rule'           => null,
                            'options'        => [
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $paymentMethod = app(config('app.contracts.PaymentMethod'));
        foreach ($arr as $data) $paymentMethod->prepareStorePaymentMethod($this->requestDTO(PaymentMethodData::class,$data));
    }
}
