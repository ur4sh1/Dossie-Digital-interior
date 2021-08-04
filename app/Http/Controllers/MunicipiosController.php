<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Autoridade;
use App\CoberturaVacinal;
use App\dados_municipios;
use App\DetalhesMunicipio;
use App\Doencas;
use App\DoencasAgravos;
use App\Equipamento;
use App\Exame;
use App\Folha;
use App\Hospital;
use App\Imunobiologica;
use App\ItemRecursoEstadual;
use App\ItemRecursoFundoEstadual;
use App\ItemRecursoFundoNacional;
use App\Leito;
use App\Municipio;
use App\Profissional;
use App\Programa;
use App\RecursoEstadual;
use App\RecursoFundoEstadual;
use App\RecursoFundoNacional;
use App\Regional;
use App\Rh;
use App\RhCategoria;
use App\Servico;
use App\TipoEquipamento;
use App\TipoRecursoNacional;
use App\TipoServico;
use App\Veiculo;
use App\Cargo;
use App\Partido;
use App\Internacao;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $autoridade=Autoridade::all();
        $municipio=Municipio::all();
        $regional=Regional::all();
        $leito=Leito::all();
        $hospital=Hospital::all();
        $veiculo=Veiculo::all();
        $equipamento=Equipamento::all();
        $tipo_equipamento=TipoEquipamento::all();
        $tipo_servico=TipoServico::all();
        $servico=Servico::all();
        $rh=Rh::all();
        $rhcategoria=RhCategoria::all();
        $programas=Programa::all();
        $coberturaVacinal=CoberturaVacinal::all();
        $imunobiologica=Imunobiologica::all();
        $doencas=Doencas::all();
        $doencasAgravos=DoencasAgravos::all();
        $ano=Ano::all();
        $tipoRecursoNacional=TipoRecursoNacional::all();
        $recursoFundoNacional=RecursoFundoNacional::all();
        $recursoFundoEstadual=RecursoFundoEstadual::all();
        $recursoEstadual=RecursoEstadual::all();
        $itemRecursoEstadual=ItemRecursoEstadual::all();
        $itemRecursoFundoEstadual=ItemRecursoFundoEstadual::all();
        $itemRecursoFundoNacional=ItemRecursoFundoNacional::all();
        $exame=Exame::all();
        $internacao=Internacao::all();

        return view("admin.municipios", compact('autoridade','municipio',
            'regional','leito','hospital','veiculo','equipamento','tipo_equipamento','tipo_servico',
            'servico','rh','rhcategoria','programas','coberturaVacinal','imunobiologica',
            'doencas','doencasAgravos','ano','tipoRecursoNacional','recursoEstadual','recursoFundoEstadual','recursoFundoNacional',
            'itemRecursoEstadual','itemRecursoFundoEstadual','itemRecursoFundoNacional','exame','internacao'));
    }

    public function indexAlternativo()
    {
        $autoridades=Autoridade::all();
        $municipios=Municipio::all();
        $regional=Regional::all();
        $leitos=Leito::all();
        $hospital=Hospital::all();
        $veiculos=Veiculo::all();
        $equipamentos=Equipamento::all();
        $tipo_equipamentos=TipoEquipamento::all();
        $tipo_servico=TipoServico::all();
        $servico=Servico::all();
        $dadosMunicipios=DadosMunicipios::all();
        $detalhes=DetalhesMunicipio::all();
        $cargos=Cargo::all();
        $partidos=Partido::all();
        $internacaos=Internacao::all();
        $folhas=Folha::all();
        $profissionals=Profissional::all();

        return view("admin.municipiosv2", compact('autoridades','municipios','regional','partidos','internacaos',
            'leitos','hospital','veiculos','equipamentos','tipo_equipamentos','tipo_servico','servico','dadosMunicipios','detalhes',
            'cargos','folhas','profissionals'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $m)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {

    }
}
