<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Eloquent\User;
use App\Eloquent\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Eloquent\User::class, 3)->create()->each(function ($u) {
        //     $u->save();
        // });

        $author = Role::where('alias', 'author')->first();
        $editor = Role::where('alias', 'editor')->first();

        $user1 = User::create([
            'name' => 'Phóng viên 1',
            'email' => 'pv1@domain.com',
            'password' => bcrypt('123456'),
        ]);

        $user1->roles()->attach($author);

        $user2 = User::create([
            'name' => 'Phóng viên 2',
            'email' => 'pv2@domain.com',
            'password' => bcrypt('123456')
        ]);

        $user2->roles()->attach($author);

        $user3 = User::create([
            'name' => 'Biên tập viên 1',
            'email' => 'btv1@domain.com',
            'password' => bcrypt('123456')
        ]);

        $user2->roles()->attach($editor);
    }
}
