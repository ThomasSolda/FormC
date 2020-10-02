<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::paginate(10);
        return view("formularios.index", compact("forms"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = new Form;
        $title = __("Nuevo formulario");
        $textButton = __("Crear");
        $route = route("formularios.store");
        $ultimoId = Form::orderBy('id', 'desc')->first()->id+1;
        return view("formularios.create", compact("title", "textButton", "route","form","ultimoId"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          "id"=>"required|int",
          "fecha" => "nullable|date",
          "mes" => "nullable|string|min:5",
          "lugar" => "nullable|string|min:5",
          "localidad" => "nullable|string|min:5",
          "barrio" => "nullable|string|min:5",
          "tipodehecho" => "nullable|string|min:5",
          "personasidentificadas" => "nullable|string|min:5",
          "clanasociado" => "nullable|string|min:5",
          "movil" => "nullable|string|min:5",
          "elementossecuestrados" => "nullable|string|min:5",
          "observaciones" => "nullable|string|min:5",
          "linkdeorigen" => "nullable|string|min:5",
          "latitud" => "nullable|string|min:5",
          "longitud" => "nullable|string|min:5",
          "anio" => "nullable|string|min:5",
          "link_adicional1" => "nullable|string|min:5",
          "link_adicional2" => "nullable|string|min:5",
          "observaciones2" => "nullable|string|min:5"
      ]);
      Form::create($request->only("id","fecha", "mes","lugar","localidad","barrio","tipodehecho","personasidentificadas","clanasociado","movil","elementossecuestrados","observaciones","linkdeorigen","latitud","longitud","anio",'link_adicional1','link_adicional2','observaciones2'));
      return redirect(route("formularios.index"))
          ->with("success", __("¡Formulario creado!"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
       $update = true;
       $title = __("Editar Formulario");
       $textButton= __("Actualizar");
       $route = route("formularios.update", ["formulario" => $form]);
       return view("formularios.edit",compact("update","title","textButton","route","formulario"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {

    }
}
