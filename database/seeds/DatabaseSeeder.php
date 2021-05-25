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
        $this->call(UserSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(RegionalSeeder::class);
        $this->call(DadosMunicipiosSeeder::class);
        $this->call(DetalhesMunicipioSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(PartidosSeeder::class);
        $this->call(CargosSeeder::class);
        $this->call(RhCategoriaSeeder::class);
        $this->call(AutoridadesSeeder::class);
        $this->call(AnosSeeder::class);
        $this->call(HospitalsSeeder::class);
        $this->call(LeitosSeeder::class);
        $this->call(VeiculosSeeder::class);
        $this->call(ExamesSeeder::class);
        $this->call(SalacirurgicasSeeder::class);
        $this->call(TipoServicosSeeder::class);
        $this->call(ServicosSeeder::class);
        $this->call(TipoEquipamentosSeeder::class);
        $this->call(EquipamentosSeeder::class);
        $this->call(RhSeeder::class);
        $this->call(ProfissionalSeeder::class);
        $this->call(FolhaSeeder::class);
        $this->call(InternacaoSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(ImunobiologicaSeeder::class);
        $this->call(CoberturaVacinalSeeder::class);
        $this->call(DoencasSeeder::class);
        $this->call(DoencasAgravosSeeder::class);
        $this->call(ItemRecursoEstadualSeeder::class);
        $this->call(ItemRecursoFundoEstadualSeeder::class);
        $this->call(ItemRecursoFundoNacionalSeeder::class);
        $this->call(TipoRecursoNacionalSeeder::class);
        $this->call(RecursoEstadualSeeder::class);
        $this->call(RecursoFundoEstadualSeeder::class);
        $this->call(RecursoFundoNacionalSeeder::class);
    }
}
