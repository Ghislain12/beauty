<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Orders;
use App\Models\Measure;
use App\Models\Customer;
use App\Models\ModelImage;
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
        User::factory()->count(10)->create();
        Customer::factory()->count(100)->create();
        ModelImage::factory()->count(100)->create();
        Orders::factory()->count(200)->create();
        Measure::factory()->count(100)->create();
    }
}
