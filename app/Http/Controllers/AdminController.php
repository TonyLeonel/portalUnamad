<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pagina_categoria;
use App\Models\Pagina;
use App\Models\Publicacion_categoria;
use App\Models\Publicacion;
use App\Models\Comunicado_categoria;
use App\Models\Comunicado;
use App\Models\Permiso;
use App\Models\Carpeta;
use App\Models\Archivo;
use App\Models\Carrera;
use App\Models\Docente;
use App\Models\Facultad;
use App\Models\Menu;
use Carbon\Carbon;
use stdClass;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
   public function index()
   {
      return view('admin.index');
   }

   //USUARIOS
   public function usuarios(Request $request)
   {
      return view('admin.usuarios');
   }

   public function usuario_nuevo(Request $request)
   {
      $usuario = null;
      $pagina_categorias = Pagina_categoria::where('estado', 1)->get();
      $publicacion_categorias = Publicacion_categoria::where('estado', 1)->get();
      $comunicado_categorias = Comunicado_categoria::where('estado', 1)->get();
      $permisos = collect();
      return view('admin.usuario_editar', compact('usuario', 'pagina_categorias', 'publicacion_categorias', 'comunicado_categorias', 'permisos'));
   }

   public function usuario_modificar(Request $request, $id)
   {
      $usuario = User::findOrFail($id);
      $pagina_categorias = Pagina_categoria::where('estado', 1)->get();
      $publicacion_categorias = Publicacion_categoria::where('estado', 1)->get();
      $comunicado_categorias = Comunicado_categoria::where('estado', 1)->get();
      $permisos = Permiso::where('user_id', $id)->get();
      return view('admin.usuario_editar', compact('usuario', 'pagina_categorias', 'publicacion_categorias', 'comunicado_categorias', 'permisos'));
   }

   //PAGINAS
   public function pagina_categorias(Request $request)
   {
      $menus = Menu::all();
      return view('admin.pagina_categorias', compact('menus'));
   }

   public function paginas(Request $request)
   {
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Pagina_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.paginas', compact('categorias'));
   }

   public function pagina_nuevo(Request $request)
   {
      $pagina = null;
      // $menus=Menu::where('tipo',2)->where('estado',1)->get();
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Pagina_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.pagina_editar', compact('pagina', 'categorias'));
   }

   public function pagina_modificar(Request $request, $id)
   {
      $pagina = Pagina::findOrFail($id);
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PAGINA')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Pagina_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.pagina_editar', compact('pagina', 'categorias'));
   }

   //COMUNICADOS
   public function comunicado_categorias(Request $request)
   {
      return view('admin.comunicado_categorias');
   }

   public function comunicados(Request $request)
   {
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Comunicado_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.comunicados', compact('categorias'));
   }

   public function comunicado_nuevo(Request $request)
   {
      $comunicado = null;
      $user = Auth::user();
      $ahora = Carbon::now();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Comunicado_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.comunicado_editar', compact('categorias', 'comunicado', 'ahora'));
   }

   public function comunicado_modificar(Request $request, $id)
   {
      $comunicado = Comunicado::findOrFail($id);
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'COMUNICADO')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Comunicado_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.comunicado_editar', compact('categorias', 'comunicado'));
   }

   //PUBLICACIONES
   public function publicacion_categorias(Request $request)
   {
      return view('admin.publicacion_categorias');
   }

   public function publicaciones(Request $request)
   {
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Publicacion_categoria::whereIn('id', $permiso_ids)->get();
      // print("<pre>".print_r($permisos,true)."</pre>");
      // print("<pre>".print_r($permiso_ids,true)."</pre>");
      // print("<pre>".print_r($categorias,true)."</pre>");
      return view('admin.publicaciones', compact('categorias'));
   }

   public function publicacion_nuevo(Request $request)
   {
      $publicacion = null;
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Publicacion_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.publicacion_editar', compact('categorias', 'publicacion'));
   }

   public function publicacion_modificar(Request $request, $id)
   {
      $publicacion = Publicacion::findOrFail($id);
      $user = Auth::user();
      $permisos = Permiso::where('user_id', $user->id)->where('elemento', 'PUBLICACION')->get();
      $permiso_ids = $permisos->map(function ($permiso) {
         return $permiso->elemento_id;
      });
      $categorias = Publicacion_categoria::whereIn('id', $permiso_ids)->get();
      return view('admin.publicacion_editar', compact('categorias', 'publicacion'));
   }

   //DOCUMENTOS
   public function documentos(Request $request)
   {
      $carpetas = Carpeta::all();
      $archivos = Archivo::all();
      $documentos = $this->ordenar($carpetas, $archivos, null);
      return view('admin.documentos', compact('documentos'));
   }

   protected function ordenar($carpetas, $archivos, $padre)
   {
      $resultado = collect();
      //carpetas
      foreach ($carpetas as $carpeta) {
         if ($carpeta->carpeta_id == $padre) {
            $elemento = new stdClass();
            $elemento->tipo = 'CARPETA';
            $elemento->id = $carpeta->id;
            $elemento->nombre = $carpeta->nombre;
            $elemento->alias = $carpeta->alias;
            $elemento->enlace = '';
            $elemento->estado = $carpeta->estado;
            $elemento->destacado = 0;
            $elemento->hijos = $this->ordenar($carpetas, $archivos, $carpeta->id);
            $resultado->push($elemento);
         }
      }
      //archivos
      foreach ($archivos as $archivo) {
         if ($archivo->carpeta_id == $padre) {
            $elemento = new stdClass();
            $elemento->tipo = 'ARCHIVO';
            $elemento->id = $archivo->id;
            $elemento->nombre = $archivo->nombre;
            $elemento->alias = $archivo->alias;
            $elemento->enlace = $archivo->enlace;
            $elemento->estado = $archivo->estado;
            $elemento->destacado = $archivo->destacado;
            $resultado->push($elemento);
         }
      }
      return $resultado;
   }
   // CARRERAS
   public function carreras(Request $request)
   {
      //return "hla";
      $carrera = Carrera::all();
      return view('admin.carrera', compact('carrera'));
   }
   public function carrera_nuevo(Request $request)
   {
      $carrera = null;
      $facultades = Facultad::all();
      return view('admin.carrera_editar', compact('carrera', 'facultades'));
   }
   public function carrera_editar(Request $request, $id)
   {
      $carrera = Carrera::findOrFail($id);
      $facultades = Facultad::all();
      return view('admin.carrera_editar', compact('carrera', 'facultades'));
   }
   /**
    * DOCENTES
    */
   public function docentes(Request $request)
   {
      $docente = Docente::all();
      return view('admin.docente', compact('docente'));
   }
   public function docentes_nuevo(Request $request)
   {
      $docente = null;
      $carreras = Carrera::all();
      return view('admin.docente_editar', compact('carreras', 'docente'));
   }
   public function docentes_editar(Request $request, $id)
   {
      $carreras = Carrera::all();
      $docente = Docente::find($id);
      return view('admin.docente_editar', compact('carreras', 'docente'));
   }
   public function menu(Request $request)
   {
      $carrera = null;
      $menus = Menu::all();
      return view('admin.menu', compact('menus'));
   }
   public function analytics(Request $request)
   {
      // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

      // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));

      // $analyticsData = Analytics::performQuery(
      //     Period::years(1),
      //     'ga:sessions',
      //     [
      //         'metrics' => 'ga:sessions, ga:pageviews',
      //         'dimensions' => 'ga:yearMonth'
      //     ]
      // );
      // print("<pre>".print_r($analyticsData)."</pre>");
      return view('admin.analytics');
   }
}
