<?php

use Illuminate\Database\Seeder;
Use App\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'name'=>'categoria1',
            'email'=>'thavo@gmail.com',
            'rfc_provider'=>'1234567891234',
            'address'=>'dasdas',
            'phone'=>'123456789',
        ]);
        
    }
}
