<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LocationsSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            [
                'nombreLugar' => 'Plaza Central',
                'region' => 'Puno',
                'provincia' => 'San Román',
                'distrito' => 'Juliaca',
                'descripcion' => 'Ubicación principal de monitoreo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombreLugar' => 'Parque Industrial',
                'region' => 'Arequipa',
                'provincia' => 'Arequipa',
                'distrito' => 'Cerro Colorado',
                'descripcion' => 'Zona industrial',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombreLugar' => 'Campus UPeU',
                'region' => 'Lima',
                'provincia' => 'Lima',
                'distrito' => 'Chosica',
                'descripcion' => 'Campus universitario',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombreLugar' => 'Estación Sur',
                'region' => 'Cusco',
                'provincia' => 'Cusco',
                'distrito' => 'Wanchaq',
                'descripcion' => 'Zona de pruebas ambientales',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombreLugar' => 'Mirador Norte',
                'region' => 'Huancayo',
                'provincia' => 'Huancayo',
                'distrito' => 'El Tambo',
                'descripcion' => 'Estación remota',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombreLugar' => 'Laguna Azul',
                'region' => 'San Martín',
                'provincia' => 'El Dorado',
                'distrito' => 'Sauce',
                'descripcion' => 'Monitoreo de zona natural',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombreLugar' => 'Estación Andina',
                'region' => 'Ayacucho',
                'provincia' => 'Huamanga',
                'distrito' => 'Jesús Nazareno',
                'descripcion' => 'Ubicación de alta altitud',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

