<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::insert([
          [
            'name'=>'Кардиология'
          ],
          [
            'name'=>'Хирургия'
          ],
          [
            'name'=>'Лор'
          ],
          [
            'name'=>'Офтальмология'
          ],
          [
            'name'=>'Педиатрия'
          ],
          [
            'name'=>'Диагностика'
          ],
        ]);
    }
}
