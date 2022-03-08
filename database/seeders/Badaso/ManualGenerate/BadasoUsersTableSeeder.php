<?php

namespace Database\Seeders\Badaso\ManualGenerate;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\Role;
use Uasoft\Badaso\Models\User;
use Uasoft\Badaso\Models\UserRole;

class BadasoUsersTableSeeder extends Seeder
{
	/**
	* Auto generated seed file
	*
	* @return void
	*
	* @throws Exception
	*/
	public function run()
	{
		\DB::beginTransaction();
		try {
			$user = User::create([
				'name' => 'admin',
				'username' => 'admin',
				'email' => 'admin@admin.com',
				'email_verified_at' => date('Y-m-d H:i:s'),
				'password' => Hash::make('admin'),
			]);

			$role = Role::where('name', 'administrator')->first();

			if (is_null($role)) {
				$role = new Role();
				$role->name = 'administrator';
				$role->display_name = 'Administrator';
				$role->save();
			}

			UserRole::create([
				'user_id' => $user->id,
				'role_id' => $role->id,
			]);

			\DB::commit();
		} catch(Exception $e) {
			\DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
