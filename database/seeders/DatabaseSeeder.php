<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->insert([
            ['name' => 'HR'],
            ['name' => 'IT'],
            ['name' => 'Sales']
        ]);

        DB::table('designations')->insert([
            ['name' => 'Manager'],
            ['name' => 'Developer'],
            ['name' => 'Analyst']
        ]);

        DB::table('users')->insert([
            ['name' => 'John Doe', 'fk_department' => 1, 'fk_designation' => 1, 'phone_number' => '1234567890'],
            ['name' => 'Jane Smith', 'fk_department' => 2, 'fk_designation' => 2, 'phone_number' => '0987654321'],
            ['name' => 'Sam Wilson', 'fk_department' => 3, 'fk_designation' => 3, 'phone_number' => '5555555555']
        ]);
    }
}
