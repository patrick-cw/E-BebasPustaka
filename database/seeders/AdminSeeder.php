<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory()->times(5)->create();
        Admin::create(['nama' => 'Admin', 'email' => 'admin@admin.com', 'nip'=>5319395205946131, 'password' => bcrypt('admin')]);
    }
}
