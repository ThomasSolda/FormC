<div class="w-full">
  <div class="container mx-auto px-16">
    <h1 class="mb-5">{{ $title }}</h1>
  </div>
<form class="w-full max-w-6xl mx-auto bg-white rounded-lg border overflow-hidden" method="POST" action="{{ $route }}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset

<div class="flex flex-wrap -mx-3 mb-6">

    <div class="w-full px-3 mb-6 md:mb-0 mt-2">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="id">
                {{ __("Id") }}
            </label>
            <input name="id" value="{{ old("id") ?? $ultimoId ?? $form->id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" readonly>
            @error("id")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fecha">
                {{ __("Fecha") }}
            </label>
            <input name="fecha" value="{{ old("fecha") ?? $form->fecha  }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="fecha" type="date">
            @error("fecha")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mes">
                {{ __("Mes") }}
            </label>
            <input name="mes" value="{{ old("mes") ?? $form->mes }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="mes" type="text">

            @error("mes")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="anio">
                {{ __("Año") }}
            </label>
            <input name="anio" value="{{ old("anio") ?? $form->anio }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="anio" type="text">

            @error("anio")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full  px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tipodehecho">
                {{ __("Tipo de hecho") }}
            </label>
            <input name="tipodehecho" value="{{ old("tipodehecho") ?? $form->tipodehecho }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="tipodehecho" type="text">

            @error("tipodehecho")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full  px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lugar">
                {{ __("Lugar del hecho") }}
            </label>
            <input name="lugar" value="{{ old("lugar") ?? $form->lugar }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="lugar" type="text">

            @error("lugar")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="localidad">
                {{ __("Localidad") }}
            </label>
            <input name="localidad" value="{{ old("localidad") ?? $form->lugar_liberacion }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="lugar_liberacion" type="text">

            @error("localidad")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="barrio">
                {{ __("Barrio") }}
            </label>
            <input name="barrio" value="{{ old("barrio") ?? $form->barrio }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="barrio" type="text">

            @error("barrio")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="latitud">
                {{ __("Latitud") }}
            </label>
            <input name="latitud" value="{{ old("latitud") ?? $form->latitud }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="latitud" type="text">

            @error("latitud")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="longitud">
                {{ __("Longitud") }}
            </label>
            <input name="longitud" value="{{ old("longitud") ?? $form->longitud }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="longitud" type="text">

            @error("longitud")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personasidentificadas">
                {{ __("Personas Identificadas") }}
            </label>
            <input name="personasidentificadas" value="{{ old("personasidentificadas") ?? $form->personasidentificadas }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="personasidentificadas" type="text">

            @error("personasidentificadas")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="clanasociado">
                {{ __("Clan asociado") }}
            </label>
            <input name="clanasociado" value="{{ old("clanasociado") ?? $form->clanasociado }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="clanasociado" type="text">

            @error("clanasociado")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="movil">
                {{ __("Móvil") }}
            </label>
            <input name="movil" value="{{ old("movil") ?? $form->movil }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="movil" type="text">

            @error("movil")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="elementossecuestrados">
                {{ __("Elementos secuestrados") }}
            </label>
            <input name="elementossecuestrados" value="{{ old("elementossecuestrados") ?? $form->elementossecuestrados }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="elementossecuestrados" type="text">

            @error("elementossecuestrados")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full  px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="linkdeorigen">
                {{ __("Link de origen") }}
            </label>
            <input name="linkdeorigen" value="{{ old("linkdeorigen") ?? $form->linkdeorigen }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="linkdeorigen" type="text">

            @error("linkdeorigen")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link_adicional1">
                {{ __("Link adicional 1") }}
            </label>
            <input name="link_adicional1" value="{{ old("link_adicional1") ?? $form->link_adicional1 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="link_adicional1" type="text">

            @error("link_adicional1")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link_adicional2">
                {{ __("Link adicional 2") }}
            </label>
            <input name="link_adicional2" value="{{ old("link_adicional2") ?? $form->link_adicional2 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="link_adicional2" type="text">

            @error("link_adicional2")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="observaciones">
                {{ __("Observaciones") }}
            </label>
            <textarea name="observaciones" value="{{old("observaciones")?? $form->observaciones }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="observaciones"></textarea>
            @error("observaciones")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="observaciones2">
                {{ __("Observaciones 2") }}
            </label>
            <textarea name="observaciones2" value="{{old("observaciones2")?? $form->observaciones2 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="observaciones2"></textarea>
            @error("observaciones2")
            <div class="text-red-500 text-xs italic">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
    <div class="md:flex md:items-center">
        <div class="w-full px-3">
            <button class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-2" type="submit">
                {{ $textButton }}
            </button>
        </div>
    </div>
</form>
</div>
