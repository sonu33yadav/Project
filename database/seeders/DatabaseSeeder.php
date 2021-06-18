<?php

namespace Database\Seeders;

use App\Models\products;
use App\Models\email;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
      $this->call(ProductsSeeder::class);
      $this->call(EmailSeeder::class);        
    }
}
