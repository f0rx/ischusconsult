<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Super Admin Role
        $superAdmin = Role::create(['name' => 'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $moderator = Role::create(['name' => 'moderator']);

        $createData = Permission::create(['name' => 'create']);
        $editData = Permission::create(['name' => 'edit']);
        $updateData = Permission::create(['name' => 'update']);
        $deleteData = Permission::create(['name' => 'delete']);
        $destroyData = Permission::create(['name' => 'delete-forever']);

        // Assign Super Admin Permissions
        $superAdmin->givePermissionTo($createData);
        $superAdmin->givePermissionTo($editData);
        $superAdmin->givePermissionTo($updateData);
        $superAdmin->givePermissionTo($deleteData);
        $superAdmin->givePermissionTo($destroyData);

        // Assign Admin Permissions
        $admin->givePermissionTo($editData);
        $admin->givePermissionTo($updateData);
        $admin->givePermissionTo($deleteData);

        // Assign Moderator Permissions
        $moderator->givePermissionTo($editData);
        $moderator->givePermissionTo($updateData);
    }
}
