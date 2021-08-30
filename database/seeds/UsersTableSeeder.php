<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Roles;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $adminRoles = Roles::where('name','admin')->first();
        $authorRoles = Roles::where('name','author')->first();
        $userRoles = Roles::where('name','user')->first();

        $admin = Admin::create([
			'admin_name' => 'minhnq',
			'admin_email' => 'minhnq@gmail.com',
			'admin_phone' => '0123456789',
			'admin_password' => md5('123456')	
        ]);
        $author = Admin::create([
			'admin_name' => 'minhnq123',
			'admin_email' => 'minhnq123@gmail.com',
			'admin_phone' => '0123456789',
			'admin_password' => md5('123456')	
        ]);
        $user = Admin::create([
			'admin_name' => 'minhnq456',
			'admin_email' => 'minhnq456@gmail.com',
			'admin_phone' => '0123456789',
			'admin_password' => md5('123456')
        ]);

        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);
    }
}
