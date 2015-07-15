<?php

use Illuminate\Database\Seeder;
use App\complaints as Complaints;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Uncomment the bsaelow to run the seeder
        Complaints::insert(['id' => '100000','hostel' => 'o','subject' => '','description' => '','created_name' => '']);
    }
}
