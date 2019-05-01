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
Route::get('intranet', 'IntranetController@intranet')->name('intranet');

Route::get('nosotros', 'PrincipalController@nosotros');
Route::get('programarservicios', 'PrincipalController@programarservicios');
Route::get('horarios', 'PrincipalController@horarios');
Route::get('correo', 'PrincipalController@correo');
Route::resource('mail', 'MailController');
Route::get('ingresar','PrincipalController@ingresar');
Route::get('admin','PrincipalController@admin');
Route::post('login','Auth/LoginController@login')->name('login');
Route::post('register','Auth/RegisterController@login')->name('register');
Route::post('logOut','Auth\LoginController@logOut')->name('logOut');
Route::get('cuenta','PrincipalController@cuenta')->name('cuenta');
Route::get('cotizacion','PrincipalController@cotizacion');
Route::get('crear','PrincipalController@crear');
Route::get('cotizacion2','ServiciooController@cotizacion2');
Route::get('calendario','PrincipalController@calendario');
Route::get('calendario2','PrincipalController@calendario2');
Route::get('confirmar','PrincipalController@confirmar');
Route::resource('clientes','ClienteController');
Route::resource('domicilios','DomicilioController');
Route::resource('personales','PersonalController');
Route::resource('usuarios','UsuarioController');
Route::resource('uusers','UserController');
Route::resource('herramientas','HerramientaController');
Route::resource('servicioss','ServicioController');
Route::resource('diagnosticogeneral','DiagnosticoController');
Route::resource('mantenimientofrenos','FrenoController');
Route::resource('fotos','FotoController');
Route::resource('productos','ProductoController');
Route::resource('repuestos','RepuestoController');
Route::resource('catServs','CatServController');
Route::resource('categorias','CategoriaController');
Route::resource('serviciosss','ServiciooController');


Auth::routes();

/*Route::group(['middleware' => ['web']], function () {
    Route::get('intranet', 'IntranetController@intranet')->name('intranet');
    Route::get('ingresar','PrincipalController@ingresar');
    Route::post('login','Auth\LoginController@login')->name('login');
    Route::post('register','Auth\RegisterController@login')->name('register');
    Route::post('logout','Auth\LoginController@logOut')->name('logout');
});*/

Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/intranet', function(){
       if(Auth::user()->admin == 0){
           return view('intranet/users/index');
       } else{
           $users['users'] = \App\User::all();
           return view('intranet/index', $users);
       }
    });
});



