<?php

namespace Hanafalah\WellmedFeature\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Illuminate\Database\Seeder;

class MasterFeatureSeeder extends Seeder
{
    use HasRequestData;

    protected $__features = [
        [
            "name" => "Sistem Pelayanan Klinik",
            "alias" => "Core",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "permissions" => [
            ]
        ],
        [
            "name" => "Hr Module",
            "label" => "HR",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "permissions" => [
                'api.employee-management.index',
            ],
            "childs" => [
                [
                    "name" => "Kepegawaian",
                    "label" => "Employee",
                    "version" => [
                        "version" => "1.0",
                        "price" => 0
                    ],
                    "permissions" => [
                        'api.employee-management.employee.*'
                    ]
                ]
            ]
        ],
        [
            'name' => 'Finance',
            'label' => 'Finance',
            'version' => [
                'version' => '1.0',
                'price' => 0
            ],
            'permissions' => [
                'api.finance.index',
            ],
            'childs' => [
                [
                    'name' => 'Journal Entry',
                    'label' => 'Journal Entry',
                    'version' => [
                        'version' => '1.0',
                        'price' => 0
                    ],
                    'permissions' => [
                        'api.finance.journal-entry.*'
                    ]
                ]
            ]
        ],
        [
            "name" => "Sistem Rekam Medis Elektronik",
            "label" => "EMR",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "permissions" => [
                'api.'
            ],
            "childs" => [
                [
                    "name" => "Sistem Rekam Medis Elektronik",
                    "label" => "EMR",
                    "price" => 0
                ]
            ]
        ],
        [
            "name" => "Integrasi Layanan dan Klaim BPJS",
            "label" => "BPJS",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Konektivitas Resmi Satu Sehat Kemenkes",
            "label" => "Satu Sehat",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Layanan Janji Temu dan Reservasi Pasien",
            "label" => "Appointment",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Manajemen Layanan Rawat Jalan",
            "label" => "Outpatient",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "childs" => [
                ["name" => "Poli Umum","label" => "Outpatient","price" => 0],
                ["name" => "Orthopedi", "label" => "Outpatient", "price" => 0],
                ["name" => "Sunat", "label" => "Outpatient", "price" => 0],
                ["name" => "Kecantikan", "label" => "Outpatient", "price" => 0],
                ["name" => "Mata", "label" => "Outpatient", "price" => 0],
                ["name" => "THT", "label" => "Outpatient", "price" => 0],
                ["name" => "Penyakit Dalam", "label" => "Outpatient", "price" => 0],
                ["name" => "Gigi & Mulut", "label" => "Outpatient", "price" => 0],
                ["name" => "KIA", "label" => "Outpatient", "price" => 0],
                ["name" => "Lansia", "label" => "Outpatient", "price" => 0],
                ["name" => "Admin", "label" => "Outpatient", "price" => 0],
                ["name" => "Vaccine", "label" => "Outpatient", "price" => 0],
                ["name" => "MTBS", "label" => "Outpatient", "price" => 0],
            ]
        ],
        [
            "name" => "Layanan Instalasi Gawat Darurat",
            "label" => "IGD",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "childs" => [
                ["name" => "Ruang Tindakan","label" => "IGD","price" => 0],
                ["name" => "Unit Gawat Darurat","label" => "IGD","price" => 0]
            ]
        ],
        [
            "name" => "Manajemen Perawatan Rawat Inap",
            "label" => "Inpatient",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Verlos Kamer",
            "label" => "VK",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Sistem Informasi Laboratorium",
            "label" => "Lab",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "childs" => [
                [
                    "name" => "Patologi Klinis",
                    "label" => "Lab",
                    "price" => 0
                ],
                [
                    "name" => "Patologi Anatomi",
                    "label" => "Lab",
                    "price" => 0
                ],
                [
                    "name" => "Lab Lanjutan",
                    "label" => "Lab+",
                    "price" => 0
                ]
            ]

        ],
        [
            "name" => "Sistem Informasi Radiologi dan Pencitraan",
            "label" => "RIS",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ],
            "childs" => [
                [
                    "name" => "RIS Lanjutan",
                    "label" => "RIS+",
                    "price" => 0
                ]
            ]

        ],
        [
            "name" => "Manajemen Apotek dan Obat",
            "label" => "Apotek",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Pelaporan dan Analitik Kesehatan",
            "label" => "Reporting",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
        [
            "name" => "Sistem Kasir dan Point of Sales Klinik",
            "label" => "POS",
            "version" => [
                "version" => "1.0",
                "price" => 0
            ]
        ],
    ];


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->__features as $feature) {
            app(config('app.contracts.MasterFeature'))->prepareStoreMasterFeature(
                $this->requestDTO(config('app.contracts.MasterFeatureData'),$feature)
            );
        }
    }
}
