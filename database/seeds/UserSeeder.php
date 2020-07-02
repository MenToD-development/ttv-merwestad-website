<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    protected function administrator(): void
    {        $user = new User();
        $user->fill([
            'name' => 'admin',
            'email' => 'admin@ttvmerwestad.nl',
            'password' => '$2y$12$z.cT0ohESR9plGWnr6b8ZudE7r6p8ftwc7j4EsFjC.Ordhpws1.UW',
            'type' => 'admin'
        ]);
        $user->save();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->administrator();
    }
}
