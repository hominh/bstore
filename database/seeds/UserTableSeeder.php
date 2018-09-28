<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $admin = new User();
        $admin->name = 'hohoangminh';
        $admin->email = 'hoilamgi86@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $createPost = new Permission();
        $createPost->name         = 'create-newpost';
        $createPost->display_name = 'Create New Posts'; // optional
        // Allow a user to...
        $createPost->description  = 'create new  posts'; // optional
        $createPost->save();

        $admin->attachPermission($createPost);
    }
}
