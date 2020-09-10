<?php

use Illuminate\Database\Seeder;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dawn Baker',
            'email' => 'deltabravo73@gmail.com',
            'password' => password_hash('P@ssword1', PASSWORD_DEFAULT),
            'is_admin' => true
        ]);

        DB::table('users')->insert([
            'name' => 'Steve George',
            'email' => 'edu@pagerange.com',
            'password' => password_hash('P@ssword1', PASSWORD_DEFAULT),
        ]);

    }
}
