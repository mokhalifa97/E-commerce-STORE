<?php

use App\Model\Category;
use App\Model\Product;
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
        factory(Category::class,6)->create();
        factory(Product::class,15)->create();

        
        
        // $this->call(UsersTableSeeder::class);    
    }
}
