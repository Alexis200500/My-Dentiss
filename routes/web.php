<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OdontologosController;
use App\Http\Controllers\especialidadesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\TipoMedicamentosController;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Tipo_sangreController;
use App\Http\Controllers\LoginController;

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

Route::get('/inicio',function(){
    return view('plantilla');
});

Route::get('/index',function(){
    return view('index');
});

//Odontologos
Route::get('/alta_odontologos',[OdontologosController::class,'alta_odontologos'])->name('alta_odontologos');

Route::post('/guardar_odontologos',[OdontologosController::class,'guardar_odontologos'])->name('guardar_odontologos');
Route::get('/reportes_odontologos',[OdontologosController::class,'reportes_odontologos'])->name('reportes_odontologos');
Route::get('/modifica_odontologos/{idodo}',[OdontologosController::class,'modifica_odontologos'])->name('modifica_odontologos');
Route::post('/cambio_odontologos',[OdontologosController::class,'cambio_odontologos'])->name('cambio_odontologos');
Route::get('/activar_odontologos/{idodo}',[OdontologosController::class,'activar_odontologos'])->name('activar_odontologos');
Route::get('/desactivar_odontologos/{idodo}',[OdontologosController::class,'desactivar_odontologos'])->name('desactivar_odontologos');
Route::get('/eliminar_odontologos/{idodo}',[OdontologosController::class,'eliminar_odontologos'])->name('eliminar_odontologos');


// especialidades
Route::get('/alta_especialidades',[especialidadesController::class,'alta_especialidades'])->name('alta_especialidades');
Route::post('/guarda_especialidades',[especialidadesController::class,'guarda_especialidades'])->name('guarda_especialidades');
Route::get('/reportes_especialidades',[especialidadesController::class,'reportes_especialidades'])->name('reportes_especialidades');
Route::get('/modifica_especialidades/{idesp}',[especialidadesController::class,'modifica_especialidades'])->name('modifica_especialidades');
Route::post('/guardarcambios_especialidades',[especialidadesController::class,'guardarcambios_especialidades'])->name('guardarcambios_especialidades');
Route::get('/activar_especialidades/{idesp}',[especialidadesController::class,'activar_especialidades'])->name('activar_especialidades');
Route::get('/desactivar_especialidades/{idesp}',[especialidadesController::class,'desactivar_especialidades'])->name('desactivar_especialidades');
Route::get('/eliminar_especialidades/{idesp}',[especialidadesController::class,'eliminar_especialidades'])->name('eliminar_especialidades');

//municipios
Route::get('/alta_municipios',[MunicipiosController::class,'alta_municipios'])->name('alta_municipios');
Route::post('/guarda_municipios',[MunicipiosController::class,'guarda_municipios'])->name('guarda_municipios');
Route::get('/reportes_municipios',[MunicipiosController::class,'reportes_municipios'])->name('reportes_municipios');
Route::get('/modifica_municipios/{idmun}',[MunicipiosController::class,'modifica_municipios'])->name('modifica_municipios');
Route::post('/guardarcambios_municipios',[MunicipiosController::class,'guardarcambios_municipios'])->name('guardarcambios_municipios');
Route::get('/activar_municipios/{idmun}',[MunicipiosController::class,'activar_municipios'])->name('activar_municipios');
Route::get('/desactivar_municipios/{idmun}',[MunicipiosController::class,'desactivar_municipios'])->name('desactivar_municipios');
Route::get('/eliminar_municipios/{idmun}',[MunicipiosController::class,'eliminar_municipios'])->name('eliminar_municipios');

//Tipo medicamentos
Route::get('/alta_tipomedicamentos',[TipoMedicamentosController::class,'alta_tipomedicamentos'])->name('alta_tipomedicamentos');
Route::post('/guarda_tipomedicamentos',[TipoMedicamentosController::class,'guarda_tipomedicamentos'])->name('guarda_tipomedicamentos');
Route::get('/reportes_tipomedicamentos',[TipoMedicamentosController::class,'reportes_tipomedicamentos'])->name('reportes_tipomedicamentos');
Route::get('/modifica_tipomedicamentos/{idtipomed}',[TipoMedicamentosController::class,'modifica_tipomedicamentos'])->name('modifica_tipomedicamentos');
Route::post('/guardarcambios_tipomedicamentos',[TipoMedicamentosController::class,'guardarcambios_tipomedicamentos'])->name('guardarcambios_tipomedicamentos');
Route::get('/activar_tipomedicamentos/{idtipomed}',[TipoMedicamentosController::class,'activar_tipomedicamentos'])->name('activar_tipomedicamentos');
Route::get('/desactivar_tipomedicamentos/{idtipomed}',[TipoMedicamentosController::class,'desactivar_tipomedicamentos'])->name('desactivar_tipomedicamentos');
Route::get('/eliminar_tipomedicamentos/{idtipomed}',[TipoMedicamentosController::class,'eliminar_tipomedicamentos'])->name('eliminar_tipomedicamentos');

//Medicamentos
Route::get('/alta_medicamentos',[MedicamentosController::class,'alta_medicamentos'])->name('alta_medicamentos');
Route::post('/guarda_medicamentos',[MedicamentosController::class,'guarda_medicamentos'])->name('guarda_medicamentos');
Route::get('/reportes_medicamentos',[MedicamentosController::class,'reportes_medicamentos'])->name('reportes_medicamentos');
Route::get('/modifica_medicamentos/{idmed}',[MedicamentosController::class,'modifica_medicamentos'])->name('modifica_medicamentos');
Route::post('/cambio_medicamentos',[MedicamentosController::class,'cambio_medicamentos'])->name('cambio_medicamentos');
Route::get('/activar_medicamentos/{idmed}',[MedicamentosController::class,'activar_medicamentos'])->name('activar_medicamentos');
Route::get('/desactivar_medicamentos/{idmed}',[MedicamentosController::class,'desactivar_medicamentos'])->name('desactivar_medicamentos');
Route::get('/eliminar_medicamentos/{idmed}',[MedicamentosController::class,'eliminar_medicamentos'])->name('eliminar_medicamentos');

                                /*Usuarios*/
Route::get('/altausuarios',[UsuariosController::class,'altausuarios'])->name('altausuarios');
Route::post('/guardarusuario',[UsuariosController::class,'guardarusuario'])->name('guardarusuario');
Route::get('/reporteusuarios',[UsuariosController::class,'reporteusuarios'])->name('reporteusuarios');
Route::get('/desactivausuario/{idusuario}',[UsuariosController::class,'desactivausuario'])->name('desactivausuario');
Route::get('/activausuario/{idusuario}',[UsuariosController::class,'activausuario'])->name('activausuario');
Route::get('/borrarusuario/{idusuario}',[UsuariosController::class,'borrarusuario'])->name('borrarusuario');
Route::get('/modificausuario/{idusuario}',[UsuariosController::class,'modificausuario'])->name('modificausuario');
Route::get('/guardacambiosusuario',[UsuariosController::class,'guardacambiosusuario'])->name('guardacambiosusuario');

                            /*tipo sangres */
Route::get('/altatiposangre',[Tipo_sangreController::class, 'altatiposangre'])->name('altatiposangre');
Route::post('/guardartiposan',[Tipo_sangreController::class, 'guardartiposan'])->name('guardartiposan');
Route::get('/reportetiposan',[Tipo_sangreController::class,'reportetiposan'])->name('reportetiposan');
Route::get('/desactivatiposangre/{idtipossan}',[Tipo_sangreController::class,'desactivatiposangre'])->name('desactivatiposangre');
Route::get('/activatiposangre/{idtipossan}',[Tipo_sangreController::class,'activatiposangre'])->name('activatiposangre');
Route::get('/borrartiposangre/{idtipossan}',[Tipo_sangreController::class,'borrartiposangre'])->name('borrartiposangre');
Route::get('/modificatiposangre/{idtipossan}',[Tipo_sangreController::class,'modificatiposangre'])->name('modificatiposangre');
Route::post('/guardacambiostiposangre',[Tipo_sangreController::class,'guardacambiostiposangre'])->name('guardacambiostiposangre');

Route::get('/',[LoginController::class,'login'])->name('login');
//Limpiar cache
Route::get('/clear-cache', function () { 
    echo Artisan::call('config:clear'); 
    echo Artisan::call('config:cache'); 
    echo Artisan::call('cache:clear'); 
    echo Artisan::call('route:clear'); 
    echo Artisan::call('view:clear'); 
 });