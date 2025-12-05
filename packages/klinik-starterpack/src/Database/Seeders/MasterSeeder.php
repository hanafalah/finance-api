<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;
use Hanafalah\ModuleExamination\Seeders\{
    ExaminationStuffSeeder,
    MasterVaccineSeeder,
    FormSeeder
};
use Hanafalah\ModulePeople\Database\Seeders\DatabaseSeeder as PeopleCollectionSeeder;
use Hanafalah\ModuleAnatomy\Database\Seeders\DatabaseSeeder as AnatomyCollectionSeeder;
use Hanafalah\ModuleItem\Database\Seeders\DatabaseSeeder as ItemCollectionSeeder;
use Hanafalah\ModuleInformedConsent\Seeders\MasterInformedConsentSeeder;
use Hanafalah\ModulePayment\Database\Seeders\CoaSeeder;
use Hanafalah\ModulePayment\Database\Seeders\CoaTypeSeeder;
use Hanafalah\ModulePayment\Database\Seeders\WalletSeeder;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder{
    public function run()
    {
        $this->call([
            PeopleCollectionSeeder::class,
            ItemStuffSeeder::class,
            PatientTypeSeeder::class,
            PatientTypeServiceSeeder::class,
            MedicServiceSeeder::class,
            PaymentMethodSeeder::class,
            ProfessionSeeder::class,
            OccupationSeeder::class,
            FormSeeder::class,
            ExaminationStuffSeeder::class,
            MasterVaccineSeeder::class,
            AnatomyCollectionSeeder::class,
            RegionalSeeder::class,
            EmployeeTypeSeeder::class,
            EmployeeSeeder::class,
            PatientOccupationSeeder::class,
            FundingSeeder::class,
            CoaTypeSeeder::class,
            CoaSeeder::class,
            WalletSeeder::class,
            DosageFormSeeder::class,
            FreqUnitSeeder::class,
            MedicalCompositionUnitSeeder::class,
            CompositionUnitSeeder::class,
            MedicalNetUnitSeeder::class,
            MixUnitSeeder::class,
            TherapeuticClassSeeder::class,
            PackageFormSeeder::class,
            TrademarkSeeder::class,
            UsageLocationSeeder::class,
            UsageRouteSeeder::class,
            RoomItemCategorySeeder::class,
            ItemCollectionSeeder::class,
            ClassRoomSeeder::class,
            BrandSeeder::class,
            InfrastructureSeeder::class,
            PurchaseLabelSeeder::class,
            SampleSeeder::class,
            ClinicalPathologySeeder::class,
            RadiologySeeder::class,
            ProgramCategorySeeder::class,
            ProgramOccupationSeeder::class,
            MasterInformedConsentSeeder::class,
            ScreeningSeeder::class
        ]);
    }
}
