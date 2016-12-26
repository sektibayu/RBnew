<?php

use Illuminate\Database\Seeder;
use App\DBUser;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new DBUser;
        $admin->nrp_nip='1000';
        $admin->name='admin';
        $admin->save();
    }
}
