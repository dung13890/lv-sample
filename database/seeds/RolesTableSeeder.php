<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'title' => 'Phóng viên',
            'alias' => 'author',
            'permissions' => json_encode([
                'post.create' => true,
            ]),
        ]);

        $editor = Role::create([
            'title' => 'Biên tập viên',
            'alias' => 'editor',
            'permissions' => json_encode([
                'post.update' => true,
                'post.publish' => true,
            ]),
        ]);
    }
}
