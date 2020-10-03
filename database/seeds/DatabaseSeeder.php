<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\User;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'image' => 'files/seed.jpeg',
        ]);
        Category::create([
            'name' => 'Mobile phone ',
            'slug' => 'mobile-phone',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'image' => 'files/mobile.jpeg',
        ]);
        Category::create([
            'name' => 'PC ',
            'slug' => 'pc',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'image' => 'files/pc.jpg',
        ]);
        Category::create([
            'name' => 'TV',
            'slug' => 'tv',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'image' => 'files/tv.jpg',
        ]);
        Subcategory::create([
            'name' => 'Samsung',
            'category_id' => '4',

        ]);
        Subcategory::create([
            'name' => 'LG',
            'category_id' => '4',

        ]);
        Subcategory::create([
            'name' => 'Philips',
            'category_id' => '4',

        ]);
        Subcategory::create([
            'name' => 'Sharp',
            'category_id' => '4',

        ]);
        Subcategory::create([
            'name' => 'hp',
            'category_id' => '1',
        ]);
        Subcategory::create([
            'name' => 'Dell',
            'category_id' => '1',
        ]);
        Subcategory::create([
            'name' => 'Mak',
            'category_id' => '1',
        ]);
        Subcategory::create([
            'name' => 'Acer',
            'category_id' => '1',
        ]);
        Subcategory::create([
            'name' => 'Apple',
            'category_id' => '2',
        ]);
        Subcategory::create([
            'name' => 'Samsung',
            'category_id' => '2',
        ]);
        Subcategory::create([
            'name' => 'Sony',
            'category_id' => '2',
        ]);
        Subcategory::create([
            'name' => 'Huawei',
            'category_id' => '2',
        ]);
        Subcategory::create([
            'name' => 'hp',
            'category_id' => '3',
        ]);
        Subcategory::create([
            'name' => 'Dell',
            'category_id' => '3',
        ]);
        Subcategory::create([
            'name' => 'Mak',
            'category_id' => '3',
        ]);
        Subcategory::create([
            'name' => 'Acer',
            'category_id' => '3',
        ]);
        Product::create([
            'name' => 'Asd456',
            'image' => 'product/laptop6.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => '1',
            'subcategory_id' => '5',

        ]);
        Product::create([
            'name' => 'GFDE434',
            'image' => 'product/laptop77.jpeg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 1,
            'subcategory_id' => 6,

        ]);
        Product::create([
            'name' => 'REF334',
            'image' => 'product/laptop99.jpeg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 1,
            'subcategory_id' => 7,

        ]);
        Product::create([
            'name' => 'REF33ASD4',
            'image' => 'product/laptop2.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 1,
            'subcategory_id' => 8,

        ]);
        Product::create([
            'name' => 'TV55TR',
            'image' => 'product/tv1.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 4,
            'subcategory_id' => 1,

        ]);
        Product::create([
            'name' => 'HP234sy',
            'image' => 'product/tv5.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 4,
            'subcategory_id' => 2,

        ]);
        Product::create([
            'name' => 'SAmg34',
            'image' => 'product/tv1.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 4,
            'subcategory_id' => 3,

        ]);
        Product::create([
            'name' => 'SAmg3444',
            'image' => 'product/tv1.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 4,
            'subcategory_id' => 4,

        ]);
        Product::create([
            'name' => 'DSA12',
            'image' => 'product/pc.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 3,
            'subcategory_id' => 13,

        ]);
        Product::create([
            'name' => 'HP234syr',
            'image' => 'product/pc.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 3,
            'subcategory_id' => 14,

        ]);
        Product::create([
            'name' => 'HP234sy56',
            'image' => 'product/pc.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 3,
            'subcategory_id' => 15,

        ]);
        Product::create([
            'name' => 'HP234sy56',
            'image' => 'product/pc.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 3,
            'subcategory_id' => 16,

        ]);
        Product::create([
            'name' => 'HP234sy5',
            'image' => 'product/phone.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 2,
            'subcategory_id' => 9,

        ]);
        Product::create([
            'name' => 'HP234sy32',
            'image' => 'product/phone1.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 2,
            'subcategory_id' => 10,

        ]);
        Product::create([
            'name' => 'HP234sy77',
            'image' => 'product/phone5.jpeg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 2,
            'subcategory_id' => 11,

        ]);
        Product::create([
            'name' => 'HP234sy90',
            'image' => 'product/phone4.jpg',
            'price' => rand(800, 2000),
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'additional_info' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                            erat ut turpis. Suspendisse urna nibh, viverra non, semper
                            suscipit, posuere a, pede.Donec nec justo eget felis facilisis
                            fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                            pellentesque felis.',
            'category_id' => 2,
            'subcategory_id' => 12,

        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => NOW(),
            'address' => 'Secheltemaheerd 14,9785AG Groningen',
            'phone_number' => '06767676768',
            'is_admin' => 1,

        ]);
        User::create([
            'name' => 'Muhanad',
            'email' => 'muhanad@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => NOW(),
            'address' => 'Secheltemaheerd 14,9785AG Groningen',
            'phone_number' => '06767676768',
            'is_admin' => 0,

        ]);
        User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => NOW(),
            'address' => 'Secheltemaheerd 14,9785AG Groningen',
            'phone_number' => '06767676768',
            'is_admin' => 0,

        ]);
        User::create([
            'name' => 'Subhi',
            'email' => 'subhi@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => NOW(),
            'address' => 'Secheltemaheerd 14,9785AG Groningen',
            'phone_number' => '06767676768',
            'is_admin' => 0,

        ]);
    }
}
