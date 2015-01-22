<?php
/**
 * Created by PhpStorm.
 * User: JulieAnnAyap
 * Date: 1/16/15
 * Time: 12:17 AM
 */

use Faker\Factory as Faker;

class ProvinceDataSeeder extends Seeder {

    protected $faker;

    function __construct()
    {
        $this->faker = Faker::create();
    }

    public function run()
    {
        $provinces = array(
            array(1, 'Abra'),
            array(2, 'Agusan del Norte'),
            array(3, 'Agusan del Sur'),
            array(4, 'Aklan'),
            array(5, 'Albay'),
            array(6, 'Antique'),
            array(7, 'Apayao'),
            array(8, 'Aurora'),
            array(9, 'Basilan'),
            array(10, 'Bataan'),
            array(11, 'Batanes'),
            array(12, 'Batangas'),
            array(13, 'Benguet'),
            array(14, 'Biliran'),
            array(15, 'Bohol'),
            array(16, 'Bukidnon'),
            array(17, 'Bulacan'),
            array(18, 'Cagayan'),
            array(19, 'Camarines Norte'),
            array(20, 'Camarines Sur'),
            array(21, 'Camiguin'),
            array(22, 'Capiz'),
            array(23, 'Catanduanes'),
            array(24, 'Cavite'),
            array(25, 'Cebu'),
            array(26, 'Compostela Valley'),
            array(27, 'Cotabato'),
            array(28, 'Davao del Norte'),
            array(29, 'Davao del Sur'),
            array(30, 'Davao Oriental'),
            array(31, 'Eastern Samar'),
            array(32, 'Guimaras'),
            array(33, 'Ifugao'),
            array(34, 'Ilocos Norte'),
            array(35, 'Ilocos Sur'),
            array(36, 'Iloilo'),
            array(37, 'Isabela'),
            array(38, 'Kalinga'),
            array(39, 'La Union'),
            array(40, 'Laguna'),
            array(41, 'Lanao del Norte'),
            array(42, 'Lanao del Sur'),
            array(43, 'Leyte'),
            array(44, 'Maguindanao'),
            array(45, 'Marinduque'),
            array(46, 'Masbate'),
            array(47, 'Metro Manila'),
            array(48, 'Misamis Occidental'),
            array(49, 'Misamis Oriental'),
            array(50, 'Mountain Province'),
            array(51, 'Negros Occidental'),
            array(52, 'Negros Oriental'),
            array(53, 'Northern Samar'),
            array(54, 'Nueva Ecija'),
            array(55, 'Nueva Vizcaya'),
            array(56, 'Occidental Mindoro'),
            array(57, 'Oriental Mindoro'),
            array(58, 'Palawan'),
            array(59, 'Pampanga'),
            array(60, 'Pangasinan'),
            array(61, 'Quezon'),
            array(62, 'Quirino'),
            array(63, 'Rizal'),
            array(64, 'Romblon'),
            array(65, 'Samar'),
            array(66, 'Sarangani'),
            array(67, 'Siquijor'),
            array(68, 'Sorsogon'),
            array(69, 'South Cotabato'),
            array(70, 'Southern Leyte'),
            array(71, 'Sultan Kudarat'),
            array(72, 'Sulu'),
            array(73, 'Surigao del Norte'),
            array(74, 'Surigao del Sur'),
            array(75, 'Tarlac'),
            array(76, 'Tawi-Tawi'),
            array(77, 'Zambales'),
            array(78, 'Zamboanga del Norte'),
            array(79, 'Zamboanga del Sur'),
            array(80, 'Zamboanga Sibugay')
        );

        foreach($provinces as $province){
            Province::create([
                'province' => $province[1]
            ]);
        }
    }

}