<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
       factory(peninsula\User::class)->create([
        'nombre' => 'Ivan',
        'apellido' => 'Carrillo',
        'tipo_ci' => 'Venezolano',
        'number_ci'=> '15505531',
        'genero' => 'Masculino',
        'fecha_nacimiento'=> '1983-05-26',
        'email' => 'ikihean@outlook.com',
        'telf_casa'=> '02123414325',
        'telf_movil'=> '04263125999',
        'telf_trabajo'=> '04263125999',
        'profesion' => 'Estudiante',
        'habitantes_casa' => 4,
        'tipo_usuario' => 'Administrador',
        'lugar_edificio' => 'C',
        'lugar_apartamento' => 14,
        'password' => bcrypt('caracas0')
                       ]);
       
       factory(peninsula\User::class, 49)->create();
    }
}
