<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 9:42 PM
 */

use Faker\Factory as Faker;

class CondominiumSuiteDataSeeder extends Seeder{

    protected $faker;
    protected $condo_unit;
    protected $av_unit;
    protected $gallery;
    protected $facilities;
    protected $locations;
    
    public function __construct(CondominiumUnitTypesDataSeeder $condo_unit,
                                AvailableUnitsDataSeeder $unit,
                                CondominiumGalleryDataSeeder $gallery,
                                AmenitiesFacilitiesDataSeeder $facilities,
                                TransportationLocationDataSeeder $locations)
    {
        Condominium::truncate();
        AvailableUnit::truncate();
        Gallery::truncate();
        AmenitiesAndFacilities::truncate();
        TransportationAndLocation::truncate();

        $condos = Condominium::all();
        foreach($condos as $condo){
            $condo->unti_types()->detach();
        }

        $this->faker = Faker::create();
        $this->condo_unit = $condo_unit;
        $this->av_unit = $unit;
        $this->gallery = $gallery;
        $this->facilities = $facilities;
        $this->locations = $locations;
    }

    public function run()
    {
        $cities_list = City::lists('id');
        $status_list = CondominiumStatus::lists('id');
        $estate_list = EstateDeveloper::lists('id');
        $property_list = CondominiumStatus::lists('id');

        $number_of_rows = 50;
        for($index = 0; $index < 50; $index++) {
            $condo = Condominium::create([
                'short_name' => $this->faker->companySuffix,
                'long_name' => $this->faker->company,
                'address' => $this->faker->address,
                'star_rating' =>$this->faker->randomFloat(1, 3, 5) ,
                'city_id' => $this->faker->randomElement($cities_list),
                'condominium_status_id' => $this->faker->randomElement($status_list),
                'estate_developer_id' => $this->faker->randomElement($estate_list),
                'property_type_id' => $this->faker->randomElement($property_list),
                'units' => $this->faker->text(),
                'no_unit_available' => $this->faker->numberBetween(1,50),
                'year_built' => $this->faker->year(),
                'elevator_no' => $this->faker->numberBetween(1,50),
                'floor_no' => $this->faker->numberBetween(1,50),
                'association_dues' => $this->faker->randomDigitNotNull() . '/sqm',
                'map_link' => $this->faker->numberBetween(1,50),
                'description' => $this->faker->paragraph(),
                'building_no' => $this->faker->numberBetween(1,50),
                'cctv_no' => $this->faker->numberBetween(1,50),
                'security_no' => $this->faker->numberBetween(1,50),
                'is_deleted' => $this->faker->boolean(10),
            ]);

            $this->condo_unit->create($condo);
            $this->av_unit->create($condo);
            $this->gallery->create($condo);
            $this->facilities->create($condo);
            $this->locations->create($condo);

            echo "Condominium: $index out of $number_of_rows \n";


        }
    }
}