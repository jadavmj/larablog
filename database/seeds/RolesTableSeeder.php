<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'User has access to all system functionality'
            ],
            [
                'name' => 'author',
                'display_name' => 'Post Author',
                'description' => 'User can create, veiw posts'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }


    }
}
