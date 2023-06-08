<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Publicacion;
use App\Models\Facultad;
use Carbon\Carbon;
use App\Models\Carrera;
use App\Models\Docente;
use App\Models\Pagina_categoria;
use App\Models\Menu;
use stdClass;

class PaginaController extends Controller
{
    //---------------------------------------------------------------PAGINAS

    /**
     * BIENESTAR UNIVERSITARIO
     */
    public function bienestar(Request $request)
    {
        $id = 2;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.bienestar.index', compact('pagina','facultades','menus','facultades','menus'));
    }

    public function bienestar_actividades(Request $request)
    {
        $id = 2;
        $publicaciones = Publicacion::with(['categoria', 'user'])->where('estado', 1)->where('publicacion_categoria_id', $id)->paginate(10);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.bienestar.actividades', compact('publicaciones','facultades','menus'));
    }

    /**
     * GESTION AMBIENTAL
     */
    public function gestion_ambiental(Request $request)
    {
        $id = 8;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ambiental.index', compact('pagina','facultades','menus'));
    }

    public function gestion_ambiental_actividades(Request $request)
    {
        $id = 6;
        $publicaciones = Publicacion::with(['categoria', 'user'])->where('estado', 1)->where('publicacion_categoria_id', $id)->paginate(10);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ambiental.actividades', compact('publicaciones','facultades','menus'));
    }

    /**
     * CENTRO DE IDIOMAS
     */
    public function idiomas(Request $request)
    {
        $id = 3;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.idiomas.index', compact('pagina','facultades','menus'));
    }
    //mision y vision
    public function idiomas_mision(Request $request)
    {
        $id = 4;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.idiomas.general', compact('pagina','facultades','menus'));
    }
    //estructura organica
    public function idiomas_estructura(Request $request)
    {
        $id = 5;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.idiomas.general', compact('pagina','facultades','menus'));
    }
    //personal administrativo
    public function idiomas_personal(Request $request)
    {
        $id = 6;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.idiomas.general', compact('pagina','facultades','menus'));
    }
    //directorio
    public function idiomas_directorio(Request $request)
    {
        $id = 7;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.idiomas.general', compact('pagina','facultades','menus'));
    }

    /*** OCRI - Oficina de Cooperación y Relaciones. Internacionales - BY Alex G ***/
    public function ocri_inicio(Request $request)
    {
        $id =9;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    //mision y vision
    public function ocri_mision(Request $request)
    {
        $id = 10;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    //estructura organica
    public function ocri_estructura(Request $request)
    {
        $id = 11;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    //personal administrativo
    public function ocri_personal(Request $request)
    {
        $id = 12;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    //directorio
    public function ocri_directorio(Request $request)
    {
        $id = 13;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    //servicios
    public function ocri_servicios(Request $request)
    {
        $id = 14;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    //convenios
    public function ocri_convenios(Request $request)
    {
        $id = 15;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.ocri.index', compact('pagina','facultades','menus'));
    }
    /*** WWF - Fondo Mundial para la Naturaleza - BY Alex G ***/
    public function wwf_inicio(Request $request)
    {
        $id = 16;
        $pagina = Pagina::where('estado', 1)->FindOrFail($id);
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.wwf.index', compact('pagina','facultades','menus'));
    }
    // //mision y vision
    // public function wwf_mision(Request $request)
    // {
    //     $id = 14;
    //     $pagina = Pagina::where('estado', 1)->FindOrFail($id);
    //     return view('portal.paginas.wwf.index', compact('pagina','facultades','menus'));
    // }
    // //estructura organica
    // public function wwf_estructura(Request $request)
    // {
    //     $id = 15;
    //     $pagina = Pagina::where('estado', 1)->FindOrFail($id);
    //     return view('portal.paginas.wwf.index', compact('pagina','facultades','menus'));
    // }
    // //personal administrativo
    // public function wwf_personal(Request $request)
    // {
    //     $id = 16;
    //     $pagina = Pagina::where('estado', 1)->FindOrFail($id);
    //     return view('portal.paginas.wwf.index', compact('pagina','facultades','menus'));
    // }

    /*** FIN BY Alex G***/

    
    /**
     * TRANSPARENCIA
     */
    public function indicador_55(Request $request)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.transparencia.indicador_55' ,compact('facultades','menus'));
    }

    public function articulo_11(Request $request)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.transparencia.articulo_11' ,compact('facultades','menus'));
    }
   
    public function licenciamiento(Request $request)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.transparencia.licenciamiento' ,compact('facultades','menus'));
    }
    /**
     * CARRERAS
     */

    // 'carrera'
    // 'resena'
    // 'reglamentos'
    // 'directivas'
    // 'malla'
    // 'carrera_vision'
    // 'perfil'
    // 'campo'
    // 'plan'
    // 'areas'
    // 'objetivos'
    // 'docentes'

    public function carrera(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.carrera' ,compact('facultades','menus','carrera'));
    }
    public function resena(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.resena' ,compact('facultades','menus','carrera'));
    }
    public function reglamentos(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.reglamentos' ,compact('facultades','menus','carrera'));
    }
    public function directivas(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.directivas' ,compact('facultades','menus','carrera'));
    }
    public function malla(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.malla' ,compact('facultades','menus','carrera'));
    }
    public function carrera_vision(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.vision_mision' ,compact('facultades','menus','carrera'));
    }
    public function perfil(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.perfil' ,compact('facultades','menus','carrera'));
    }
    public function campo(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.campo' ,compact('facultades','menus','carrera'));
    }
    public function plan(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.plan' ,compact('facultades','menus','carrera'));
    }
    public function areas(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.areas' ,compact('facultades','menus','carrera'));
    }
    public function objetivos(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        return view('portal.paginas.facultades.carreras.objetivos' ,compact('facultades','menus','carrera'));
    }
    public function docentes(Request $request,$facultad,$nombre)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        $carrera=Carrera::with('facultad')->where('abreviatura',$nombre)->get()->first();
        $docentes=Docente::where('carrera_id',$carrera->id)->get();
        return view('portal.paginas.facultades.carreras.docentes' ,compact('facultades','menus','docentes','carrera'));
    }

    /**
     * FACULTADES
     */
/**
 * AGROINDUSTRIAL
 */
    public function agroindustrial(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.agroindustrial' ,compact('facultades','menus'));
    }

    public function agroindustrial_vision(Request $reaquest)
    {
        //$carrera=Carrera::
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.agroindustrial.vision-mision' ,compact('facultades','menus'));
    }

    public function agroindustrial_perfil(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.agroindustrial.perfil' ,compact('facultades','menus'));
    }
    public function agroindustrial_malla(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.agroindustrial.malla' ,compact('facultades','menus'));
    }
    
    public function agroindustrial_docentes(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.agroindustrial.docentes' ,compact('facultades','menus'));
    }

    public function forestal(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.forestal' ,compact('facultades','menus'));
    }

    public function sistemas(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.sistemas' ,compact('facultades','menus'));
    }

    public function veterinaria(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.veterinaria' ,compact('facultades','menus'));
    }

    public function matematica(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.matematica' ,compact('facultades','menus'));
    }

    public function educacion_inicial(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.educacion_inicial' ,compact('facultades','menus'));
    }

    public function educacion_primaria(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.educacion_primaria' ,compact('facultades','menus'));
    }

    public function derecho(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.derecho' ,compact('facultades','menus'));
    }

    public function enfermeria(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.enfermeria' ,compact('facultades','menus'));
    }

    public function administracion(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.administracion' ,compact('facultades','menus'));
    }

    public function contabilidad(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.contabilidad' ,compact('facultades','menus'));
    }

    public function ecoturismo(Request $reaquest)
    {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.facultades.ecoturismo' ,compact('facultades','menus'));
    }
    /**
     * UNIVERSIDAD
     * Presentación
     */    
     public function presentacion(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.presentacion' ,compact('facultades','menus'));
     }  
     public function vision(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.vision' ,compact('facultades','menus'));
     }

     public function autoridades(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.autoridades' ,compact('facultades','menus'));
     }
     public function historia(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.historia' ,compact('facultades','menus'));
     }

     public function convenios(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.convenios' ,compact('facultades','menus'));
     }

     public function organizacion(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.organizacion' ,compact('facultades','menus'));
     }
     public function infraestructura(Request $reaquest)
     {
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.paginas.universidad.infraestructura' ,compact('facultades','menus'));
     }
    //Genera paginas desde la base de datos
     public function pagina(Request $request,$flag)
     {
        $pagina = Pagina::where('estado', 1)->where('flag',$flag)->get()[0];
        $categoria=Pagina_categoria::where('flag',$flag)->get()->first();
        $lista_paginas=Pagina::where('pagina_categoria_id',$categoria->id)->get();
        $facultades=Facultad::with('carreras')->get();
        $menus=Menu::with('categorias.categorias','categorias.paginas')->where('estado',1)->whereNull('menu_id')->orderBy('posicion')->get();
        return view('portal.pagina', compact('pagina','facultades','menus','lista_paginas','categoria'));
     }

}
