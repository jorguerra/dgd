<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\{Comuna, Metro};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $xml = simplexml_load_file(storage_path('seeder.xml'));
        foreach($xml->children() as $row){
            $comuna = Comuna::firstOrCreate(['nombre' => (string) $row->COMUNA]);
            Metro::create([
                'codigo' => (string) $row->CODIGO,
                'entidad' => (string) $row->ENTIDAD,
                'nombre' => (string) $row->NOMBRE,
                'direccion' => (string) $row->DIRECCION,
                'id_comuna' => $comuna->id,
                'horario' => (string) $row->HORARIO,
                'este' => (string) $row->ESTE,
                'norte' => (string) $row->NORTE,
                'longitud' => (string) $row->LONGITUD,
                'latitud' => (string) $row->LATITUD,
            ]);
        }
    }
}
