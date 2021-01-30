<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin_name = "Brendan f0rx";
        $admin_email = "ejike.br@gmail.com";
        $admin_gender = "male";
        $admin_phone = "+2348100395180";


        // Disable all mass assignment restrictions
        Model::unguard();

        $this->call(RolePermissionSeeder::class);

        $this->command->info("Creating Super Administrator...");

        $_u = User::factory()->create([
            'name' => $admin_name,
            'slug' => Str::slug($admin_name),
            'email' => $admin_email,
            'gender' => $admin_gender,
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'phone' => $admin_phone,
            'remember_token' => Str::random(60)
        ]);

        // Assign Role to Super Admin
        $_u->assignRole(Role::where('name', 'super-admin')->first());

        $this->command->info("Super Administrator Created successfully!");
        $this->command->info("Super Admin Email ====> " . $_u->email);

        if (config('app.env') != 'production')
            User::factory(10)->create()->each(function ($user) {
                $this->command->info("Assigning Role & Permissions to Generated User " . $user->name);

                // Shuffle Roles where not admin
                $role = Role::where('name', '!=', 'super-admin')->inRandomOrder()->first();

                $user->assignRole($role);
            });

        // Seed sample applications
        $this->call(JobApplicationSeeder::class);

        $this->call(FileDocumentSeeder::class);

        // Re enable all mass assignment restrictions
        Model::reguard();
    }
}
