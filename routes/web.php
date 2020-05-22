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

Route::get('/', function () {
    return view('welcome');
});

/* Usuarios */
Route::resource('Usuarios','UsuariosController');
//Route::get('usuario', 'UsuariosController@create');

/* Cargos */
Route::resource('Cargos','CargosController');

/* Egresos */
Route::resource('Egresos','EgresosController');

/* Empleados */
Route::resource('Empleados','EmpleadosController');

/* Escolaridades */
Route::resource('Escolaridades','EscolaridadesController');

/* EstadosNNA */
Route::resource('EstadosNNA','Estados_nnaController');

/* Familiares */
Route::resource('Familiares','FamiliaresController');

/* FamiliaresNNA */
Route::resource('FamiliaresNNA','FamiliaresNNAController');

/* Funcionarios */
Route::resource('Funcionarios','FuncionariosController');

/* GradosInstruccion */
Route::resource('GradosInstruccion','Grados_instruccionController');

/* Ingresos */
Route::resource('Ingresos','IngresosController');

/* MedidasProteccion */
Route::resource('MedidasProteccion','Medidas_proteccionController');

/* NNA */
Route::resource('NNA','NNAController');

/* Organismos */
Route::resource('Organismos','OrganismosController');

/* Patologias */
Route::resource('Patologias','PatologiasController');

/* PatologiasNNA */
Route::resource('PatologiasNNA','PatologiasNNAController');