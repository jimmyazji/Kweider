<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Jimmy',
            'last_name' => 'Yazji',
            'email' => 'jimmy@gmail.com',
            'country' => 'SY',
            'phone' => '0937954758',
            'password' => bcrypt('12345678'),
        ]);
        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();
        
        $role->syncPermissions($permissions);
        
        $user->assignRole([$role->id]);
    }
}
