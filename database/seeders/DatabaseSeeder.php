<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Menu_item;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Permission;
use App\Models\Permission_role;
use App\Models\Product_image;
use App\Models\Product_tag;
use App\Models\Product;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use App\Models\User_role;
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
        User::factory(30)->create();
        Permission::factory(30)->create();
        Permission_role::factory(30)->create();
        Role::factory(30)->create();
        User_role::factory(30)->create();
        Customer::factory(30)->create();
        Order::factory(30)->create();
        Order_item::factory(30)->create();
        Category::factory(5)->create();
        Product::factory(30)->create();
        Tag::factory(30)->create();
        Product_tag::factory(10)->create();
        Product_image::factory(30)->create();
        Menu_item::factory(30)->create();
    }
}
