<?php

use Illuminate\Database\Seeder;
use App\Categories as Categories;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	Categories::insert([
    			'name' => 'Carpentry',
    			'url_name' => 'carpentry'
    		]);
    	Categories::insert([
    			'name' => 'Plumbing',
    			'url_name' => 'plumbing'
    		]);
    	Categories::insert([
    			'name' => 'House Keeping',
    			'url_name' => 'house-keeping'
    		]);
    }
}
