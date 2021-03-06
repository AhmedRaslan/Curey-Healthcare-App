<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddonsSeeder::class);
        $this->call(LocalizationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PharmacySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TimeTableSeeder::class);
        $this->call(ProductPharmacySeeder::class);
        $this->call(AppointmentSeeder::class);
        $this->call(DoctorRatingSeeder::class);
        $this->call(ProductKeywordSeeder::class);
    }
}
