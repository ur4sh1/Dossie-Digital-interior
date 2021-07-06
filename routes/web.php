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

Route::get('/itemRecursoEstadual/list/{id}','ItemRecursoEstadualController@indexAlternative')->name('itemRecursoEstadualIndex');
Route::get('/itemRecursoEstadual/create/{id}','ItemRecursoEstadualController@createAlternative')->name('itemRecursoEstadualCreate');
Route::get('/itemRecursoEstadual/edit/{id}/{mid}','ItemRecursoEstadualController@editAlternative')->name('itemRecursoEstadualEdit');
Route::post('/itemRecursoEstadual/store/{id}','ItemRecursoEstadualController@storeAlternative')->name('itemRecursoEstadualStore');
Route::post('/itemRecursoEstadual/destroy/{id}/{mid}','ItemRecursoEstadualController@deletAlternative')->name('itemRecursoEstadualDestroy');
Route::post('/itemRecursoEstadual/update/{id}/{mid}','ItemRecursoEstadualController@upAlternative')->name('itemRecursoEstadualUpdate');

Route::get('/itemRecursoFundoEstadual/list/{id}','ItemRecursoFundoEstadualController@indexAlternative')->name('itemRecursoFundoEstadualIndex');
Route::get('/itemRecursoFundoEstadual/create/{id}','ItemRecursoFundoEstadualController@createAlternative')->name('itemRecursoFundoEstadualCreate');
Route::get('/itemRecursoFundoEstadual/edit/{id}/{mid}','ItemRecursoFundoEstadualController@editAlternative')->name('itemRecursoFundoEstadualEdit');
Route::post('/itemRecursoFundoEstadual/store/{id}','ItemRecursoFundoEstadualController@storeAlternative')->name('itemRecursoFundoEstadualStore');
Route::post('/itemRecursoFundoEstadual/destroy/{id}/{mid}','ItemRecursoFundoEstadualController@deletAlternative')->name('itemRecursoFundoEstadualDestroy');
Route::post('/itemRecursoFundoEstadual/update/{id}/{mid}','ItemRecursoFundoEstadualController@upAlternative')->name('itemRecursoFundoEstadualUpdate');

Route::get('/itemRecursoFundoNacional/list/{id}','ItemRecursoFundoNacionalController@indexAlternative')->name('itemRecursoFundoNacionalIndex');
Route::get('/itemRecursoFundoNacional/create/{id}','ItemRecursoFundoNacionalController@createAlternative')->name('itemRecursoFundoNacionalCreate');
Route::get('/itemRecursoFundoNacional/edit/{id}/{mid}','ItemRecursoFundoNacionalController@editAlternative')->name('itemRecursoFundoNacionalEdit');
Route::post('/itemRecursoFundoNacional/store/{id}','ItemRecursoFundoNacionalController@storeAlternative')->name('itemRecursoFundoNacionalStore');
Route::post('/itemRecursoFundoNacional/destroy/{id}/{mid}','ItemRecursoFundoNacionalController@deletAlternative')->name('itemRecursoFundoNacionalDestroy');
Route::post('/itemRecursoFundoNacional/update/{id}/{mid}','ItemRecursoFundoNacionalController@upAlternative')->name('itemRecursoFundoNacionalUpdate');

Route::get('/recursoEstadual/create/{id}', 'RecursoEstadualController@createAlternative')->name('recursoEstadualCreate');
Route::get('/recursoEstadual/edit/{id}','RecursoEstadualController@editAlternative')->name('recursoEstadualEdit');
Route::get('/recursoEstadual/editValor/{id}/{mid}','RecursoEstadualController@editValorAlternative')->name('recursoEstadualEditvalor');
Route::post('/recursoEstadual/update/{id}/{mid}','RecursoEstadualController@updateAlternative')->name('recursoEstadualUpdate');
Route::post('/recursoEstadual/store/{id}','RecursoEstadualController@storeAlternative')->name('recursoEstadualStore');

Route::get('/recursoFundoEstadual/create/{id}', 'RecursoFundoEstadualController@createAlternative')->name('recursoFundoEstadualCreate');
Route::get('/recursoFundoEstadual/edit/{id}','RecursoFundoEstadualController@editAlternative')->name('recursoFundoEstadualEdit');
Route::get('/recursoFundoEstadual/editValor/{id}/{mid}','RecursoFundoEstadualController@editValorAlternative')->name('recursoFundoEstadualEditValor');/**/
Route::post('/recursoFundoEstadual/update/{id}/{mid}','RecursoFundoEstadualController@updateAlternative')->name('recursoFundoEstadualUpdate');
Route::post('/recursoFundoEstadual/store/{id}','RecursoFundoEstadualController@storeAlternative')->name('recursoFundoEstadualStore');

Route::get('/recursoFundoNacional/create/{id}', 'RecursoFundoNacionalController@createAlternative')->name('recursoFundoNacionalCreate');
Route::get('/recursoFundoNacional/edit/{id}','RecursoFundoNacionalController@editAlternative')->name('recursoFundoNacionalEdit');
Route::get('/recursoFundoNacional/editValor/{id}/{mid}','RecursoFundoNacionalController@editValorAlternative')->name('recursoFundoNacionalEditValor');
Route::post('/recursoFundoNacional/update/{id}/{mid}','RecursoFundoNacionalController@updateAlternative')->name('recursoFundoNacionalUpdate');
Route::post('/recursoFundoNacional/store/{id}','RecursoFundoNacionalController@storeAlternative')->name('recursoFundoNacionalStore');

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
    'itemRecursoEstadual'=>'ItemRecursoEstadualController',
    'itemRecursoFundoEstadual'=>'ItemRecursoFundoEstadualController',
    'coberturaVacinal'=>'CoberturaVacinalController',
    'imunobiologica'=>'ImunobiologicaController',
    'leito'=>'LeitosController'
]);
