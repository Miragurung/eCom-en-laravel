<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Panasonic Refrigerator',
                "price"=>"30000",
                "description"=>"A feezer with lots of features",
                "category"=>"Freezer",
                "gallery"=>" https://www.google.com/search?q=refrigerator&sxsrf=ALeKk03fFOKknb5I1QeWAXVlMamf0Ey2hA:1618641059979&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjqjZjr04TwAhXR7HMBHb0yCjgQ_AUoAnoECAIQBA&biw=1280&bih=578&dpr=1.5#imgrc=uBYfhlnioERfNM"
            ],
            [
                'name'=>'LG Refrigerator',
                "price"=>"25000",
                "description"=>"A single door freezer with much more feature",
                "category"=>"freezer",
                "gallery"=>"https://www.sathya.in/Media/Default/Thumbs/0029/0029021-lg-fridge-gld241argy.jpg"
            ],
            [
                'name'=>'Smart Refrigerator',
                "price"=>"50000",
                "description"=>"A four door freezer with much more feature",
                "category"=>"freezer",
                "gallery"=>"https://kitchenaid-h.assetsadobe.com/is/image/content/dam/business-unit/whirlpool/en-us/marketing-content/site-assets/page-content/refrigerator-sclp/Images/masthead/WHP_ReferSCLP_Mobile_IMG3x-updated.jpg?fit=constrain&fmt=jpg&utc=2018-09-19T19:00:56Z&wid=1245"
            ],
            [
                'name'=>'Samsung Refrigeratoe',
                "price"=>"500089",
                "description"=>"A smart freezer with much more feature",
                "category"=>"freezer",
                "gallery"=>" https://cdn.vox-cdn.com/thumbor/l94s97ID2tyTUh6kKeEr0vz1oA0=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19568996/Family_Hub_CES2020_Black__1_.jpg"
            ]

           
        ]);
    }
}