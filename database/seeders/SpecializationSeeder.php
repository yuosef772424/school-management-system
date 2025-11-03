<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialization;

class SpecializationSeeder extends Seeder
{
    public function run(): void
    {
        $specializations = [
            ['name' => 'تقنية المعلومات', 'code' => 'IT', 'total_fees' => 50000, 'is_active' => true],
            ['name' => 'المحاسبة', 'code' => 'ACC', 'total_fees' => 45000, 'is_active' => true],
            ['name' => 'إدارة الأعمال', 'code' => 'BA', 'total_fees' => 48000, 'is_active' => true],
            ['name' => 'الهندسة المدنية', 'code' => 'CE', 'total_fees' => 60000, 'is_active' => true],
            ['name' => 'اللغة الإنجليزية', 'code' => 'ENG', 'total_fees' => 40000, 'is_active' => true],
        ];

        foreach ($specializations as $spec) {
            Specialization::create($spec);
        }
    }
}
