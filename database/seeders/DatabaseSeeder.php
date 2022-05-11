<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
		DB::table('ages')->insert
		([
			'age_group' => '0 to 17',
			'description' => 'generic description',
			'age_inferior' => 0,
			'age_superior' => 17,
		]);
		DB::table('ages')->insert
		([
			'age_group' => '18 to 24',
			'description' => 'generic description',
			'age_inferior' => 18,
			'age_superior' => 24,
		]);
		DB::table('ages')->insert
		([
			'age_group' => '25 to 34',
			'description' => 'generic description',
			'age_inferior' => 25,
			'age_superior' => 34,
		]);
		DB::table('ages')->insert
		([
			'age_group' => '35 to 47',
			'description' => 'generic description',
			'age_inferior' => 35,
			'age_superior' => 47,
		]);
		DB::table('ages')->insert
		([
			'age_group' => '48 or above',
			'description' => 'generic description',
			'age_inferior' => 48,
			'age_superior' => null,
		]);
    }
}
