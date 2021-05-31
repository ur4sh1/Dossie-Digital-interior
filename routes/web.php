<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/admin/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login', 'AuthController@login')->name('admin.login');

Route::get('/admin/municipios', 'MunicipiosController@indexAlternativo');

Route::get('/financeiro/create/{id}', 'FinanceiroController@createAlternative')->name('financeiroCreate');
Route::get('/recursoEstadual/create/{id}', 'RecursoEstadualController@createAlternative')->name('recursoEstadualCreate');

Route::resources([
    'partido'=>'PartidosController',
    'municipios'=>'MunicipiosController',
    'autoridade'=>'AutoridadesController',
    'regionals'=>'RegionalsController',
    'hospitals'=>'HospitalController',
    'servicos'=>'ServicoController',
    'veiculo'=>'VeiculoController',
    'tipoServicos'=>'TipoServicoController',
    'equipamentos'=>'EquipamentoController',
    'tipoEquipamentos'=>'TipoEquipamentoController',
    'dados'=>'DadosController',
    'rhs'=>'RhController',
    'rhCategorias'=>'RhCategoriaController',
    'folha'=>'FolhaController',
    'programa'=>'ProgramaController',
    'doencasAgravos'=>'DoencasAgravosController',
    'doencas'=>'DoencasController',
    'financeiro'=>'FinanceiroController',
    'recursoEstadual'=>'RecursoEstadualController',
    'recursoFundoEstadual'=>'RecursoFundoEstadualController',
    'recursoFundoNacional'=>'RecursoFundoNacionalController',

]);
