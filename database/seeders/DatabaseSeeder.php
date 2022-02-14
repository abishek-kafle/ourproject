<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\SiteSettings;
use App\Models\Social;
use App\Models\Theme;
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
        // \App\Models\User::factory(10)->create();
        Admin::insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        Theme::insert([
            'website_name' => 'Demo',
        ]);

        SiteSettings::insert([
            'email' => 'info@ourproject.com',
        ]);

        Social::insert([
            'facebook' => '',
        ]);
    }
}
