<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time_start = microtime(true);
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->runDataSeeders();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $time_end = microtime(true);
        $time = $time_end - $time_start;
        echo "\nSeeding completed: $time seconds\n";
    }

    private function production()
    {
        $this->call('CountriesDataSeeder');
        $this->call('ProvinceDataSeeder');
        $this->call('CitiesDataSeeder');
        $this->call('AccessibilityTypeDatSeeder');
        $this->call('ComposureTypeDataSeeder');
        $this->call('CondominiumStatusDataSeeder');
        $this->call('FurnishingTypeDataSeeder');
        $this->call('LocationTypeDataSeeder');
        $this->call('ParkingTypeDataSeeder');
        $this->call('PropertyTypeDataSeeder');
        $this->call('UnitTypeDataSeeder');
        $this->call('EstateDevelopersDataSeeder');
    }

    private function runDataSeeders()
    {
        $this->production();

        $this->call('AdminMessagesDataSeeder');
        $this->call('ArticlesDataSeeder');
        $this->call('BlogsDataSeeder');
        $this->call('InquiriesDataSeeder');
        $this->call('DeveloperMessageDataSeeder');
        $this->call('CondominiumSuiteDataSeeder');
        $this->call('CondoRatingSuiteDataSeeder');
        $this->call('SalesReportsDataSeeder');
        $this->call('ReviewsDataSeeder');
    }

}
