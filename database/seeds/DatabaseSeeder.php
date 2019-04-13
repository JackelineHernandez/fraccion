<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(TiposIdentificacionesTableSeeder::class);
        $this->call(AliadosTableSeeder::class);
        $this->call(EstadosTableSeeder::class);

        $this->call(ProductosTableSeeder::class);
        $this->call(TipoContenidosTableSeeder::class);
        $this->call(ContenidosTableSeeder::class);
        $this->call(ContenidoProductoTableSeeder::class);
        $this->call(CaracteristicasFinancierasTableSeeder::class);
        $this->call(CategoriaBlogsTableSeeder::class);
        $this->call(TipoRecursosTableSeeder::class);
        $this->call(ArticulosTableSeeder::class);
        $this->call(RecursoBlogsTableSeeder::class);
        $this->call(ProductoMapsTableSeeder::class);
        $this->call(CaracteristicasTecnicasTableSeeder::class);
        $this->call(CaracteristicasContenidosTableSeeder::class);
    }
}
