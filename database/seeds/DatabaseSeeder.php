<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoriesSeeder::class);

        Model::reguard();
    }
}


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
    			'url_name' => 'carpentry',
    			'description' => 'Complaints related to all door, window, cupboards, hangers, etc.'
    		]);
    	Categories::insert([
    			'name' => 'Plumbing',
    			'url_name' => 'plumbing',
    			'description' => 'Complaints related to all pipelines, drainage, etc'
    		]);
    	Categories::insert([
    			'name' => 'House Keeping',
    			'url_name' => 'house-keeping',
    			'description' => 'Complaints related to hygiene and maintenance issues'
    		]);
    	Categories::insert([
    			'name' => 'Drinking Water',
    			'url_name' => 'drinking-water',
    			'description' => 'Complaints related to RO problem'
    		]);
    	Categories::insert([
    			'name' => 'Others',
    			'url_name' => 'others',
    			'description' => 'Complaints that don\'t fit into any of the above categories'
    		]);
    }
}
