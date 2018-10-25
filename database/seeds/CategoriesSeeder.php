<?php

use Illuminate\Database\Seeder;

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
        DB::table('categories')->delete();
        for($i = 0; $i < 8; $i++ ) {
            DB::table('categories')->insert(
                [
                    'name' => '考评中心概况'.$i,
                    'description' => '考评中心概况'.$i,
//                    'is_directory' => 1,
//                    'path' => '/test',
                    'image' => null,
//                    'level' => 1,
                    'order' => $i,
                    'parent_id' => null
                ]
            );
        }
    }
}
