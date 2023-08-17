<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;

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

//PORTAL WEB
Route::get('/', [App\Http\Controllers\PortalController::class, 'index']);

Route::get('comunicados/lista', [App\Http\Controllers\PortalController::class, 'comunicados_lista']);
Route::get('comunicados', [App\Http\Controllers\PortalController::class, 'comunicados']);
Route::get('comunicados/detalle/{id}', [App\Http\Controllers\PortalController::class, 'comunicado_detalle']);
Route::get('documentos', [App\Http\Controllers\PortalController::class, 'documentos']);

/*
Route::get('publicaciones', [App\Http\Controllers\PortalController::class, 'publicaciones']);
Route::get('publicaciones/{id}/detalles', [App\Http\Controllers\PortalController::class, 'publicacion_detalle']);
*/


//AUTH
Route::get('login', [App\Http\Controllers\UserController::class, 'ingreso'])->name('login');
Route::post('login', [App\Http\Controllers\UserController::class, 'login'])->middleware('throttle:limite');
Route::post('logout', [App\Http\Controllers\UserController::class, 'logout']);


/**
 * PAGINAS
 */

Route::get('universidad/presentacion', [App\Http\Controllers\PortalController::class, 'presentacion']);

// FACULTADES
Route::get('facultades/{carrera}', [PortalController::class, 'mostrar_carrera'])->name('facultades.carrera');























//Auth::routes();


/**
 * PAGINAS GENERADAS
 */

 /*
// Universidad
Route::get('universidad/presentacion/unamad', [App\Http\Controllers\PaginaController::class, 'presentacion']);
Route::get('universidad/autoridades/unamad', [App\Http\Controllers\PaginaController::class, 'autoridades']);
Route::get('universidad/vision/unamad', [App\Http\Controllers\PaginaController::class, 'vision']);
Route::get('universidad/organizacion/unamad', [App\Http\Controllers\PaginaController::class, 'organizacion']);
Route::get('universidad/historia/unamad', [App\Http\Controllers\PaginaController::class, 'historia']);
Route::get('universidad/convenios/unamad', [App\Http\Controllers\PaginaController::class, 'convenios']);
Route::get('universidad/sedes/unamad', [App\Http\Controllers\PaginaController::class, 'sedes']);
Route::get('universidad/infraestructura/unamad', [App\Http\Controllers\PaginaController::class, 'infraestructura']);

//Bienestar universitario
Route::get('bienestar-universitario', [App\Http\Controllers\PaginaController::class, 'bienestar']);
Route::get('bienestar-universitario/actividades', [App\Http\Controllers\PaginaController::class, 'bienestar_actividades']);

//Gestión ambiental
Route::get('gestion-ambiental', [App\Http\Controllers\PaginaController::class, 'gestion_ambiental']);
Route::get('gestion-ambiental/actividades', [App\Http\Controllers\PaginaController::class, 'gestion_ambiental_actividades']);

//Centro de idiomas
Route::get('centro-de-idiomas', [App\Http\Controllers\PaginaController::class, 'idiomas']);
Route::get('centro-de-idiomas/mision-y-vision', [App\Http\Controllers\PaginaController::class, 'idiomas_mision']);
Route::get('centro-de-idiomas/estructura', [App\Http\Controllers\PaginaController::class, 'idiomas_estructura']);
Route::get('centro-de-idiomas/personal', [App\Http\Controllers\PaginaController::class, 'idiomas_personal']);
Route::get('centro-de-idiomas/directorio', [App\Http\Controllers\PaginaController::class, 'idiomas_directorio']);
*/
/*****BY AG*****/
/*** OCRI - Oficina de Cooperación y Relaciones. Internacionales - BY AG ***/
Route::get('ocri', [App\Http\Controllers\PaginaController::class, 'ocri_inicio']);
Route::get('ocri/mision-y-vision', [App\Http\Controllers\PaginaController::class, 'ocri_mision']);
Route::get('ocri/estructura', [App\Http\Controllers\PaginaController::class, 'ocri_estructura']);
Route::get('ocri/personal', [App\Http\Controllers\PaginaController::class, 'ocri_personal']);
Route::get('ocri/directorio', [App\Http\Controllers\PaginaController::class, 'ocri_directorio']);
Route::get('ocri/servicios', [App\Http\Controllers\PaginaController::class, 'ocri_servicios']);
Route::get('ocri/convenios', [App\Http\Controllers\PaginaController::class, 'ocri_convenios']);

/*** WWF - Fondo Mundial para la Naturaleza - BY AG ***/
Route::get('wwf', [App\Http\Controllers\PaginaController::class, 'wwf_inicio']);
Route::get('wwf/mision-y-vision', [App\Http\Controllers\PaginaController::class, 'wwf_mision']);
Route::get('wwf/estructura', [App\Http\Controllers\PaginaController::class, 'wwf_estructura']);
Route::get('wwf/personal', [App\Http\Controllers\PaginaController::class, 'wwf_personal']);
/*********/

//Transparencia
Route::get('transparencia/indicador-55', [App\Http\Controllers\PaginaController::class, 'indicador_55']);
Route::get('transparencia/articulo-11', [App\Http\Controllers\PaginaController::class, 'articulo_11']);
Route::get('transparencia/licenciamiento', [App\Http\Controllers\PaginaController::class, 'licenciamiento']);


Route::get('inicio/bibliotecaVirtual', [App\Http\Controllers\PaginaController::class, 'biblioteca_virtual']);
Route::get('inicio/bus', [App\Http\Controllers\PaginaController::class, 'bus']);

/*Facultades
Route::get('facultades/ingenieria/agroindustrial', [App\Http\Controllers\PaginaController::class, 'agroindustrial']);
Route::get('facultades/ingenieria/agroindustrial/vision-y-mision', [App\Http\Controllers\PaginaController::class, 'agroindustrial_vision']);
Route::get('facultades/ingenieria/agroindustrial/perfil', [App\Http\Controllers\PaginaController::class, 'agroindustrial_perfil']);
Route::get('facultades/ingenieria/agroindustrial/malla', [App\Http\Controllers\PaginaController::class, 'agroindustrial_malla']);
Route::get('facultades/ingenieria/agroindustrial/docentes', [App\Http\Controllers\PaginaController::class, 'docentes']);

Route::get('facultades/ingenieria/forestal', [App\Http\Controllers\PaginaController::class, 'forestal']);
Route::get('facultades/ingenieria/sistemas', [App\Http\Controllers\PaginaController::class, 'sistemas']);
Route::get('facultades/ingenieria/veterinaria', [App\Http\Controllers\PaginaController::class, 'veterinaria']);

Route::get('facultades/educacion/matematica-y-computacion', [App\Http\Controllers\PaginaController::class, 'matematica']);
//Route::get('facultades/educacion/inicial-y-especial', [App\Http\Controllers\PaginaController::class, 'educacion_inicial']);
//Route::get('facultades/educacion/primaria-e-informatica', [App\Http\Controllers\PaginaController::class, 'educacion_primaria']);
Route::get('facultades/educacion/derecho', [App\Http\Controllers\PaginaController::class, 'derecho']);
Route::get('facultades/educacion/enfermeria', [App\Http\Controllers\PaginaController::class, 'enfermeria']);

Route::get('facultades/ecoturismo/administracion', [App\Http\Controllers\PaginaController::class, 'administracion']);
Route::get('facultades/ecoturismo/contabilidad', [App\Http\Controllers\PaginaController::class, 'contabilidad']);
Route::get('facultades/ecoturismo/ecoturismo', [App\Http\Controllers\PaginaController::class, 'ecoturismo']);
*/
Route::get('facultades/{facultad}/{nombre}', [App\Http\Controllers\PaginaController::class, 'carrera']);
Route::get('facultades/{facultad}/{nombre}/resena', [App\Http\Controllers\PaginaController::class, 'resena']);
Route::get('facultades/{facultad}/{nombre}/reglamentos', [App\Http\Controllers\PaginaController::class, 'reglamentos']);
Route::get('facultades/{facultad}/{nombre}/directivas', [App\Http\Controllers\PaginaController::class, 'directivas']);
Route::get('facultades/{facultad}/{nombre}/malla', [App\Http\Controllers\PaginaController::class, 'malla']);
Route::get('facultades/{facultad}/{nombre}/vision-y-mision', [App\Http\Controllers\PaginaController::class, 'carrera_vision']);
Route::get('facultades/{facultad}/{nombre}/perfil', [App\Http\Controllers\PaginaController::class, 'perfil']);
Route::get('facultades/{facultad}/{nombre}/campo', [App\Http\Controllers\PaginaController::class, 'campo']);
Route::get('facultades/{facultad}/{nombre}/plan', [App\Http\Controllers\PaginaController::class, 'plan']);
Route::get('facultades/{facultad}/{nombre}/areas', [App\Http\Controllers\PaginaController::class, 'areas']);
Route::get('facultades/{facultad}/{nombre}/objetivos', [App\Http\Controllers\PaginaController::class, 'objetivos']);
Route::get('facultades/{facultad}/{nombre}/docentes', [App\Http\Controllers\PaginaController::class, 'docentes']);




//paginas creadas por base de datos
//Route::get('/{flag}/unamad', [App\Http\Controllers\PaginaController::class, 'pagina']);


/**
 * PANEL ADMINISTRADOR
 */
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);

    Route::get('usuarios', [App\Http\Controllers\AdminController::class, 'usuarios'])->middleware('esadmin');
    Route::get('usuarios/nuevo', [App\Http\Controllers\AdminController::class, 'usuario_nuevo'])->middleware('esadmin');
    Route::get('usuarios/modificar/{id}', [App\Http\Controllers\AdminController::class, 'usuario_modificar'])->middleware('esadmin');

    Route::get('paginas/categorias', [App\Http\Controllers\AdminController::class, 'pagina_categorias'])->middleware('esadmin');
    Route::get('paginas', [App\Http\Controllers\AdminController::class, 'paginas']);
    Route::get('paginas/nuevo', [App\Http\Controllers\AdminController::class, 'pagina_nuevo']);
    Route::get('paginas/menus', [App\Http\Controllers\AdminController::class, 'menu']);
    Route::get('paginas/modificar/{id}', [App\Http\Controllers\AdminController::class, 'pagina_modificar']);

    Route::get('comunicados/categorias', [App\Http\Controllers\AdminController::class, 'comunicado_categorias'])->middleware('esadmin');
    Route::get('comunicados', [App\Http\Controllers\AdminController::class, 'comunicados']);
    Route::get('comunicados/nuevo', [App\Http\Controllers\AdminController::class, 'comunicado_nuevo']);
    Route::get('comunicados/modificar/{id}', [App\Http\Controllers\AdminController::class, 'comunicado_modificar']);

    Route::get('publicaciones/categorias', [App\Http\Controllers\AdminController::class, 'publicacion_categorias'])->middleware('esadmin');
    Route::get('publicaciones', [App\Http\Controllers\AdminController::class, 'publicaciones']);
    Route::get('publicaciones/nuevo', [App\Http\Controllers\AdminController::class, 'publicacion_nuevo']);
    Route::get('publicaciones/modificar/{id}', [App\Http\Controllers\AdminController::class, 'publicacion_modificar']);

    Route::get('documentos', [App\Http\Controllers\AdminController::class, 'documentos'])->middleware('esadmin');

    Route::get('carreras', [App\Http\Controllers\AdminController::class, 'carreras']);
    Route::get('carreras/nuevo', [App\Http\Controllers\AdminController::class, 'carrera_nuevo'])->middleware('esadmin');
    Route::get('carreras/modificar/{id}', [App\Http\Controllers\AdminController::class, 'carrera_editar']);

    Route::get('docentes', [App\Http\Controllers\AdminController::class, 'docentes']);
    Route::get('docentes/nuevo', [App\Http\Controllers\AdminController::class, 'docentes_nuevo']);
    Route::get('docentes/modificar/{id}', [App\Http\Controllers\AdminController::class, 'docentes_editar']);
    Route::get('analytics', [App\Http\Controllers\AdminController::class, 'analytics']);
});

/**
 * API JSON
 */
Route::prefix('json')->group(function () {

    Route::get('usuarios', [App\Http\Controllers\Api\UserController::class, 'listar']);
    Route::post('usuarios',  [App\Http\Controllers\Api\UserController::class, 'nuevo'])->middleware('esadminapi');
    Route::put('usuarios/{id}', [App\Http\Controllers\Api\UserController::class, 'modificar'])->middleware('esadminapi'); 
    Route::delete('usuarios/{id}', [App\Http\Controllers\Api\UserController::class, 'eliminar'])->middleware('esadminapi');
    Route::post('usuarios/password/renovar',  [App\Http\Controllers\Api\UserController::class, 'renovar_password']);    

    //CATEGORIA DE PAGINAS
    Route::get('paginas/categorias', [App\Http\Controllers\Api\CategoriaPaginaController::class, 'listar']);
    Route::post('paginas/categorias',  [App\Http\Controllers\Api\CategoriaPaginaController::class, 'nuevo'])->middleware('esadminapi');
    Route::get('paginas/categorias/lista/{id}',  [App\Http\Controllers\Api\CategoriaPaginaController::class, 'lista_categoria'])->middleware('esadminapi');
    Route::put('paginas/categorias/{id}', [App\Http\Controllers\Api\CategoriaPaginaController::class, 'modificar'])->middleware('esadminapi'); 
    Route::delete('paginas/categorias/{id}', [App\Http\Controllers\Api\CategoriaPaginaController::class, 'eliminar'])->middleware('esadminapi');

    Route::get('paginas/menus', [App\Http\Controllers\Api\MenuController::class, 'listar']);
    Route::post('paginas/menus',  [App\Http\Controllers\Api\MenuController::class, 'nuevo'])->middleware('esadminapi');
    Route::put('paginas/menus/{id}', [App\Http\Controllers\Api\MenuController::class, 'modificar'])->middleware('esadminapi'); 
    Route::delete('paginas/menus/{id}', [App\Http\Controllers\Api\MenuController::class, 'eliminar'])->middleware('esadminapi');
    Route::delete('paginas/menus/{id}', [App\Http\Controllers\Api\MenuController::class, 'eliminar'])->middleware('esadminapi');

    //PAGINAS
    Route::get('paginas', [App\Http\Controllers\Api\PaginaController::class, 'listar']);
    Route::post('paginas',  [App\Http\Controllers\Api\PaginaController::class, 'nuevo']);
    Route::put('paginas/{id}', [App\Http\Controllers\Api\PaginaController::class, 'modificar']); 
    Route::delete('paginas/{id}', [App\Http\Controllers\Api\PaginaController::class, 'eliminar']);
    
    //CATEGORIA DE COMUNICADOS
    Route::get('comunicados/categorias', [App\Http\Controllers\Api\CategoriaComunicadoController::class, 'listar']);
    Route::post('comunicados/categorias',  [App\Http\Controllers\Api\CategoriaComunicadoController::class, 'nuevo'])->middleware('esadminapi');
    Route::put('comunicados/categorias/{id}', [App\Http\Controllers\Api\CategoriaComunicadoController::class, 'modificar'])->middleware('esadminapi'); 
    Route::delete('comunicados/categorias/{id}', [App\Http\Controllers\Api\CategoriaComunicadoController::class, 'eliminar'])->middleware('esadminapi');

    //COMUNICADOS
    Route::get('comunicados', [App\Http\Controllers\Api\ComunicadoController::class, 'listar']);
    Route::post('comunicados',  [App\Http\Controllers\Api\ComunicadoController::class, 'nuevo']);
    Route::post('comunicados/modificar/{id}', [App\Http\Controllers\Api\ComunicadoController::class, 'modificar']);
    Route::delete('comunicados/{id}', [App\Http\Controllers\Api\ComunicadoController::class, 'eliminar']);
    
    //CATEGORIA DE PUBLICACIONES
    Route::get('publicaciones/categorias', [App\Http\Controllers\Api\CategoriaPublicacionController::class, 'listar']);
    Route::post('publicaciones/categorias',  [App\Http\Controllers\Api\CategoriaPublicacionController::class, 'nuevo'])->middleware('esadminapi');
    Route::put('publicaciones/categorias/{id}', [App\Http\Controllers\Api\CategoriaPublicacionController::class, 'modificar'])->middleware('esadminapi'); 
    Route::delete('publicaciones/categorias/{id}', [App\Http\Controllers\Api\CategoriaPublicacionController::class, 'eliminar'])->middleware('esadminapi');

    //PUBLICACIONES
    Route::get('publicaciones', [App\Http\Controllers\Api\PublicacionController::class, 'listar']);
    Route::post('publicaciones',  [App\Http\Controllers\Api\PublicacionController::class, 'nuevo']);
    Route::post('publicaciones/modificar/{id}', [App\Http\Controllers\Api\PublicacionController::class, 'modificar']);
    Route::delete('publicaciones/{id}', [App\Http\Controllers\Api\PublicacionController::class, 'eliminar']);

    //CARPETAS    
    Route::get('carpetas', [App\Http\Controllers\Api\DocumentoController::class, 'carpetas']);
    Route::post('carpetas',  [App\Http\Controllers\Api\DocumentoController::class, 'nuevo_carpeta'])->middleware('esadminapi');
    Route::put('carpetas/{id}', [App\Http\Controllers\Api\DocumentoController::class, 'modificar_carpeta'])->middleware('esadminapi'); 
    Route::patch('carpetas/{id}', [App\Http\Controllers\Api\DocumentoController::class, 'mover_carpeta'])->middleware('esadminapi'); 
    Route::delete('carpetas/{id}', [App\Http\Controllers\Api\DocumentoController::class, 'eliminar_carpeta'])->middleware('esadminapi');

    //ARCHIVOS
    Route::post('archivos',  [App\Http\Controllers\Api\DocumentoController::class, 'nuevo_archivo'])->middleware('esadminapi');
    Route::put('archivos/{id}', [App\Http\Controllers\Api\DocumentoController::class, 'modificar_archivo'])->middleware('esadminapi'); 
    Route::patch('archivos/{id}', [App\Http\Controllers\Api\DocumentoController::class, 'mover_archivo'])->middleware('esadminapi'); 
    Route::delete('archivos/{id}', [App\Http\Controllers\Api\DocumentoController::class, 'eliminar_archivo'])->middleware('esadminapi');

    //
    Route::post('cargar/imagen',  [App\Http\Controllers\Api\AdminController::class, 'imagen']);


    Route::get('carreras', [App\Http\Controllers\Api\CarreraController::class, 'listar']);
    Route::post('carreras',  [App\Http\Controllers\Api\CarreraController::class, 'nuevo'])->middleware('esadminapi');
    Route::put('carreras/{id}', [App\Http\Controllers\Api\CarreraController::class, 'modificar']); 
    /*Route::get('nuevo', [App\Http\Controllers\Api\UserController::class, 'modificar'])->middleware('nuevo'); 
    Route::delete('usuarios/{id}', [App\Http\Controllers\Api\UserController::class, 'eliminar'])->middleware('esadminapi');
    Route::post('usuarios/password/renovar',  [App\Http\Controllers\Api\UserController::class, 'renovar_password']); */
    Route::get('docentes', [App\Http\Controllers\Api\DocenteController::class, 'listar']);
    Route::post('docentes', [App\Http\Controllers\Api\DocenteController::class, 'nuevo']);
    Route::post('docentes/{id}', [App\Http\Controllers\Api\DocenteController::class, 'modificar']); 
    Route::put('docentes/{id}', [App\Http\Controllers\Api\DocenteController::class, 'modificar']); 


});

/**
 * PROGRAMADOR
 */
Route::get('programador/generar/link', [App\Http\Controllers\ProgramadorController::class, 'link']);
Route::get('programador/cache/config', [App\Http\Controllers\ProgramadorController::class, 'config_cache']);
Route::get('programador/cache/view', [App\Http\Controllers\ProgramadorController::class, 'view_cache']);
Route::get('programador/cache/route', [App\Http\Controllers\ProgramadorController::class, 'route_cache']);
