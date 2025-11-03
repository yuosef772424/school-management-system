<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'رواتب الموظفين', 'code' => 'SAL', 'is_active' => true],
            ['name' => 'صيانة المباني', 'code' => 'MAINT', 'is_active' => true],
            ['name' => 'مستلزمات مكتبية', 'code' => 'SUPP', 'is_active' => true],
            ['name' => 'كهرباء ومياه', 'code' => 'UTIL', 'is_active' => true],
            ['name' => 'نثريات متنوعة', 'code' => 'MISC', 'is_active' => true],
        ];

        foreach ($categories as $cat) {
            ExpenseCategory::create($cat);
        }
    }
}
