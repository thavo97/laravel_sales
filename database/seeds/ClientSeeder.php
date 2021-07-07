<?php

use Illuminate\Database\Seeder;
use App\Client;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name'=>'Publico General',
            'rfc_client'=>'',
            'address'=>'',
            'phone'=>'',
            'email'=>'',
        ]);
    }
}
