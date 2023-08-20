<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicado;
use App\Models\Carpeta;
use App\Models\Archivo;
use App\Models\Publicacion;
use App\Models\Publicacion_categoria;
use App\Models\Facultad;
use App\Models\Comunicado_categoria;
use App\Models\Menu;
use Carbon\Carbon;
use DataTables;
use stdClass;

class PortalController extends Controller
{
    //
    public function index()
    {
        $ahora = Carbon::now();
        $comunicados = Comunicado::where('estado', 1)->whereDate('created_at','<=', $ahora)->whereDate('fecha_fin','>=', $ahora)->orderBy('created_at', 'desc')->get();        
        $publicaciones = Publicacion::where('estado', 1)->orderBy('created_at', 'desc')->limit('5')->get();
        return view('portal.index', compact('comunicados','publicaciones'));
    }

    /**
     * UNIVERSIDAD
     */

    public function presentacion() {
        return view('portal.universidad.presentacion');
    }

    public function autoridades() {
        return view('portal.universidad.autoridades');
    }

    public function historia() {
        return view('portal.universidad.historia');
    }

    public function sedes() {
        return view('portal.universidad.sedes');
    }

    public function politicas() {
        return view('portal.universidad.politica');
    }


    /**
     * OFICINAS
     */
    public function asamblea() {
        return view('portal.oficinas.asamblea');
    }

    public function consejo() {
        return view('portal.oficinas.consejo');
    }

    public function decanatura() {
        return view('portal.oficinas.decanatura');
    }

    public function admision() {
        return view('portal.oficinas.admision');
    }

    public function biblioteca() {
        return view('portal.oficinas.biblioteca');
    }

    public function academicos() {
        return view('portal.oficinas.academicos');
    }

    protected $bienestar_menu = array(
        array('nombre'  => 'INICIO', 'link' => 'oficinas/bienestar'),
        array('nombre'  => 'ACTIVIDADES', 'link' => 'oficinas/bienestar/actividades')
    );    

    public function bienestar() {
        $menu = $this->bienestar_menu;
        return view('portal.oficinas.bienestar.index', compact('menu'));
    }

    public function bienestar_actividades() {
        $menu = $this->bienestar_menu;
        return view('portal.oficinas.bienestar.actividades', compact('menu'));
    }

    public function incubadora() {
        return view('portal.oficinas.incubadora');
    }

    public function innovacion() {
        return view('portal.oficinas.innovacion');
    }

    public function investigacion() {
        return view('portal.oficinas.investigacion');
    }

    public function secretaria() {
        return view('portal.oficinas.secretaria');
    }

    public function calidad() {
        return view('portal.oficinas.calidad');
    }

    protected $cooperacion_menu = array(
        array('nombre'  => 'INICIO', 'link' => 'oficinas/cooperacion'),
        array('nombre'  => 'MISIÓN, VISIÓN, OBJETIVOS', 'link' => 'oficinas/cooperacion/mision'),
        array('nombre'  => 'ESTRUCTURA ORGÁNICA', 'link' => 'oficinas/cooperacion/estructura'),
        array('nombre'  => 'PERSONAL ADMINISTRATIVO', 'link' => 'oficinas/cooperacion/personal'),
        array('nombre'  => 'DIRECTORIO', 'link' => 'oficinas/cooperacion/directorio'),
        array('nombre'  => 'SERVICIOS', 'link' => 'oficinas/cooperacion/servicios'),
        array('nombre'  => 'CONVENIOS', 'link' => 'oficinas/cooperacion/convenios')
    );

    public function cooperacion() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.index', compact('menu'));
    }

    public function cooperacion_mision() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.mision', compact('menu'));
    }

    public function cooperacion_estructura() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.estructura', compact('menu'));
    }


    public function cooperacion_personal() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.personal', compact('menu'));
    }


    public function cooperacion_directorio() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.directorio', compact('menu'));
    }

    public function cooperacion_servicios() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.servicios', compact('menu'));
    }

    public function cooperacion_convenios() {
        $menu = $this->cooperacion_menu;
        return view('portal.oficinas.cooperacion.convenios', compact('menu'));
    }

    protected $ambiental_menu = array(
        array('nombre'  => 'INICIO', 'link' => 'oficinas/ambiental'),
        array('nombre'  => 'ACTIVIDADES', 'link' => 'oficinas/ambiental/actividades')
    );

    public function ambiental() {
        $menu = $this->ambiental_menu;
        return view('portal.oficinas.ambiental.index', compact('menu'));
    }

    public function ambiental_actividades() {
        $menu = $this->ambiental_menu;
        $id = 6;
        $publicaciones = Publicacion::with(['categoria', 'user'])->where('estado', 1)->where('publicacion_categoria_id', $id)->paginate(10);
        return view('portal.oficinas.ambiental.actividades', compact('menu','publicaciones'));
    }

    public function administracion() {
        return view('portal.oficinas.administracion');
    }

    public function oti() {
        return view('portal.oficinas.oti');
    }

    public function planeamiento() {
        return view('portal.oficinas.planeamiento');
    }



    /**
     * FACULTADES
     */
    public function mostrar_carrera($carrera)
    {
        // Comprobar si la vista existe antes de cargarla
        if (view()->exists('portal.paginas.facultades.' . $carrera)) {
            return view('portal.paginas.facultades.' . $carrera);
        } else {
            abort(404); // Otra acción si la vista no existe
        }
    }
    





    /**
     * PROGRAMAS
     */
    public function centro_informatica() {
        return view('portal.programas.informatica.index');
    }

    protected $idiomas_menu = array(
        array('nombre'  => 'INICIO', 'link' => 'programas/idiomas'),
        array('nombre'  => 'MISIÓN, VISIÓN Y OBJETIVOS', 'link' => 'programas/idiomas/mision'),
        array('nombre'  => 'ESTRUCTURA ORGÁNICA', 'link' => 'programas/idiomas/estructura'),
        array('nombre'  => 'PERSONAL ADMINISTRATIVO', 'link' => 'programas/idiomas/personal'),
        array('nombre'  => 'DIRECTORIO Y CONTÁCTANOS', 'link' => 'programas/idiomas/directorio'),
    );    

    public function centro_idiomas() {
        $menu = $this->idiomas_menu;
        return view('portal.programas.idiomas.index', compact('menu'));
    }

    public function centro_idiomas_mision() {
        $menu = $this->idiomas_menu;
        return view('portal.programas.idiomas.mision', compact('menu'));
    }

    public function centro_idiomas_estructura() {
        $menu = $this->idiomas_menu;
        return view('portal.programas.idiomas.estructura', compact('menu'));
    }

    public function centro_idiomas_personal() {
        $menu = $this->idiomas_menu;
        return view('portal.programas.idiomas.personal', compact('menu'));
    }

    public function centro_idiomas_directorio() {
        $menu = $this->idiomas_menu;
        return view('portal.programas.idiomas.directorio', compact('menu'));
    }

    public function postgrado() {
        return view('portal.programas.postgrado.index');
    }

    /**
     * PROYECTOS
     */
    public function jardin() {
        return view('portal.proyectos.jardin');
    }

    public function panificadora() {
        return view('portal.proyectos.panificadora');
    }

    public function bus() {
        return view('portal.proyectos.bus');
    }
    
    public function herbario() {
        return view('portal.proyectos.herbario');
    }

    public function estacion() {
        return view('portal.proyectos.estacion');
    }

    public function aldea() {
        return view('portal.proyectos.aldea');
    }

    public function km16() {
        return view('portal.proyectos.km16');
    }

    public function km18() {
        return view('portal.proyectos.km18');
    }

    /**
     * TRANSPARENCIA
     */
    public function indicador_55(Request $request) {        
        return view('portal.paginas.transparencia.indicador_55');
    }

    public function articulo_11(Request $request) {       
        return view('portal.paginas.transparencia.articulo_11');
    }

    public function licenciamiento(Request $request) {
        return view('portal.paginas.transparencia.licenciamiento');
    }
    
    /**
     * COMUNICADOS
     */

    public function comunicados(Request $request)
    {
        $ahora = Carbon::now();
        $comunicados = Comunicado::where('estado', 1)->orderBy('created_at', 'desc')->paginate(12);
        $categorias = Comunicado_categoria::get();
        return view('portal.comunicados', compact('comunicados','ahora','categorias'));
    }
    public function comunicado_detalle(Request $request, $id)
    {
        $ahora = Carbon::now();
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        $comunicado = Comunicado::with(['user','categoria'])->where('estado',1)->findOrFail($id);
        $otros = Comunicado::where('estado', 1)
                ->where('comunicado_categoria_id', $comunicado->comunicado_categoria_id)
                ->where('id', '!=', $id)
                ->orderBy('created_at', 'desc')
                ->take(5)->get();
        return view('portal.comunicado_detalle', compact('comunicado','ahora','otros','facultades','menus'));
    }
    public function documentos(Request $request)
    {
        $buscar = '';
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        if($request->has('buscar')) {
            $buscar = $request->buscar;
        }       

        if($buscar != '') {  
            $palabras = explode(" ", $buscar);
            $documentos = Archivo::where('estado',1)
            ->where(function($query) use ($palabras) {
                $primero = true;
                foreach ($palabras as $palabra) {
                    if(trim($palabra) != ''){
                        if($primero) {
                            $query->where('nombre','like','%'.$palabra.'%');
                        } else {
                            $query->orWhere('nombre','like','%'.$palabra.'%');
                        }                        
                        $query->orWhere('alias','like','%'.$palabra.'%');
                        $primero = false;
                    }
                }                
            })->get();                        
        } else {
            $carpetas = Carpeta::where('estado',1)->get();
            $archivos = Archivo::where('estado',1)->get();
            $documentos = $this->ordenar($carpetas, $archivos, null);
        }
        //return $documentos;
        $destacados = Archivo::where('estado',1)->where('destacado',1)->get();
        
        return view('portal.documentos', compact('documentos', 'buscar', 'destacados','facultades','menus'));
    }    
    protected function ordenar($carpetas, $archivos, $padre)
    {
        $resultado = collect();  
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        //carpetas
        foreach ($carpetas as $carpeta) {
            if($carpeta->carpeta_id == $padre) {
                $elemento = new stdClass();
                $elemento->tipo = 'CARPETA';
                $elemento->id = $carpeta->id;
                $elemento->nombre = $carpeta->nombre;
                $elemento->alias = $carpeta->alias;
                $elemento->enlace = '';
                $elemento->hijos = $this->ordenar($carpetas, $archivos, $carpeta->id);
                $resultado->push($elemento);
            }
        }
        //archivos
        foreach ($archivos as $archivo) {
            if($archivo->carpeta_id == $padre) {
                $elemento = new stdClass();
                $elemento->tipo = 'ARCHIVO';
                $elemento->id = $archivo->id;
                $elemento->nombre = $archivo->nombre;
                $elemento->alias = $archivo->alias;
                $elemento->enlace = $archivo->enlace;
                $resultado->push($elemento);
            }            
        }
        return $resultado;
    }
    public function publicaciones(Request $request)
    {
        $categoria_id = 0;
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        if ($request->has('categoria_id')) {
            $categoria_id = $request->categoria_id;
        }

        $texto = '';
        if ($request->has('texto')) {
            $texto = $request->texto;
        }

        $categorias = Publicacion_categoria::withCount('publicaciones')->where('estado', 1)->get();

        $publicaciones_query = Publicacion::with(['categoria', 'user'])->where('estado', 1);
        if($categoria_id != 0){
            $publicaciones_query->where('publicacion_categoria_id', $categoria_id);
        }
        if($texto != ''){
            $publicaciones_query->where(function($query) use ($texto) {
                $query->where('titulo', 'like', '%'.$texto.'%')
                      ->orWhere('resumen', 'like', '%'.$texto.'%');
            });
        }
        $publicaciones = $publicaciones_query->orderBy('created_at', 'desc')->paginate(10);

        return view('portal.publicaciones', compact('publicaciones','categorias','categoria_id','texto','facultades','menus'));
    }

    public function publicacion_detalle(Request $request, $id)
    {
        $facultades=Facultad::with('carreras')->get();
                $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();

        $publicacion = Publicacion::with(['user','categoria'])->where('estado',1)->findOrFail($id);
        $otros = Publicacion::where('estado', 1)
        ->where('publicacion_categoria_id', $publicacion->publicacion_categoria_id)
        ->where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->take(5)->get();
        return view('portal.publicacion_detalle', compact('publicacion','otros','facultades','menus'));

    }
    public function comunicados_lista(Request $request)
    {
        $query= Comunicado::with('categoria')->get();
        return DataTables::of($query)->toJson();
    }
    
}
