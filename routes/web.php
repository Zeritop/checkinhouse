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

Route::get('/', 'PrincipalController@index');
Route::get('index', 'PrincipalController@index');
Route::get('nosotros', 'PrincipalController@nosotros');
Route::get('programarservicios', 'PrincipalController@programarservicios');
Route::get('horarios', 'PrincipalController@horarios');
Route::get('correo', 'PrincipalController@correo');
Route::resource('mail', 'MailController');
Route::get('ingresar','PrincipalController@ingresar')->name('ingresar');
Route::post('login','Auth/LoginController@login')->name('login');
Route::post('register','Auth/RegisterController@login')->name('register');
Route::post('logOut','Auth\LoginController@logOut')->name('logOut');
Route::get('cuenta','PrincipalController@cuenta')->name('cuenta');
Route::get('cotizacion','PrincipalController@cotizacion');
Route::get('crear','PrincipalController@crear');
Route::get('cotizacion2','ServiciooController@cotizacion2');
//Route::get('calendario','PrincipalController@calendario');
//Route::get('calendario2','PrincipalController@calendario2');
Route::get('confirmar','PrincipalController@confirmar');
Route::resource('usuarios','UsuarioController');
Route::resource('serviciosss','ServiciooController');
Route::resource('productos','ProductoController');
Route::resource('categorias','CategoriaController');
Route::resource('calendarioEventos', 'CalendarioUserController');
Route::get('verificarCuenta','PrincipalController@verificar');

Auth::routes();

Route::get('register/verify/{code}', 'Auth\RegisterController@verify');

/*Route::group(['middleware' => ['web']], function () {
    Route::get('intranet', 'IntranetController@intranet')->name('intranet');
    Route::get('ingresar','PrincipalController@ingresar');
    Route::post('login','Auth\LoginController@login')->name('login');
    Route::post('register','Auth\RegisterController@login')->name('register');
    Route::post('logout','Auth\LoginController@logOut')->name('logout');
});*/

/*Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/intranet', function(){
       if(Auth::user()->admin == 0){
           return view('intranet/users/index');
       } else{
           $users['users'] = \App\User::all();
           return view('intranet/index', $users);
       }
    });
});*/

Route::middleware(['auth'])->group(function () {
  //Herramientas
    Route::resource('herramientas','HerramientaController');
  //Roles
    Route::resource('roles', 'RoleController');
    //Permisos
    Route::resource('permisos', 'PermisoController');
    //intranet
    Route::get('intranet', 'IntranetController@intranet')->name('intranet');
    //calendario
    Route::resource('calendario', 'CalendarioController');
    //categoria servicios
    Route::resource('catServs','CatServController');
    //generadors
    Route::resource('chGeneradors','ChGeneradorController');
    //Historials
    Route::resource('chHistorials','ChHistorialController');
    //Reliazars
    Route::resource('chRealizars','ChRealizarController');
    //clientes
    Route::resource('clientes','ClienteController');
    //contenedors
    Route::resource('contenedors','ContenedorController');
    //domicilios
    Route::resource('domicilios','DomicilioController');
    //Fotos
    Route::resource('fotos','FotoController');
    //personal
    Route::resource('personales','PersonalController');
    //repuestos
    Route::resource('repuestos','RepuestoController');
    //servicios
    Route::resource('servicioss','ServicioController');
    //diagnostico
    Route::resource('diagnosticogeneral','DiagnosticoController');
    //frenos
    Route::resource('mantenimientofrenos','FrenoController');
    //taller
    Route::resource('tallers','TallerController');
    //tipo herramientas
    Route::resource('tipoHerramientas','TipoHerramientaController');
    //usuarios
    Route::resource('uusers','UserController');
    //Vehiculos
    Route::resource('vehiculos','VehiculoController');
});
