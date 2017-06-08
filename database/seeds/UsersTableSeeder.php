<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin  = Role::where('name', 'admin')->first();

        factory(App\User::class, 10)->create()->each(function($u) {
            $role_author = Role::where('name', 'author')->first();
		    $u->posts()->save(factory(App\Post::class)->make());
            $u->roles()->attach($role_author);

		});

        $admin = new User();
        $admin->name = 'Blog Admin';
        $admin->email = 'admin@larablog.com';
        $admin->password = bcrypt('admin123');
        $admin->save();
        $admin->roles()->attach($role_admin);

    }
}
