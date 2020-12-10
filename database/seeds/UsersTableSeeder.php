<?php
use App\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'name' => 'Admin Daengweb',
            'email' => 'admin@daengweb.id',
            'password' => bcrypt('secret')
        ]);
    }
}
