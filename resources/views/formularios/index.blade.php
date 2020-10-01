@extends("layouts.app")

@section("content")

<div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
    <div class="text-center">
        <h1 class="mb-5">{{ __("Listado de noticias") }}</h1>
        <a href="{{ route("formularios.create") }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Nueva noticia") }}
        </a>
    </div>
</div>

<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
    <thead>
    <tr>
        <th class="px-4 py-2">{{ __("id") }}</th>
        <th class="px-4 py-2">{{ __("fecha") }}</th>
        <th class="px-4 py-2">{{ __("mes") }}</th>
        <th class="px-4 py-2">{{ __("lugar") }}</th>
        <th class="px-4 py-2">{{ __("localidad") }}</th>
        <th class="px-4 py-2">{{ __("barrio") }}</th>
        <th class="px-4 py-2">{{ __("tipodehecho") }}</th>
        <th class="px-4 py-2">{{ __("personasidentificadas") }}</th>
        <th class="px-4 py-2">{{ __("clanasociado") }}</th>
        <th class="px-4 py-2">{{ __("movil") }}</th>
        <th class="px-4 py-2">{{ __("observaciones") }}</th>
        <th class="px-4 py-2">{{ __("linkdeorigen") }}</th>
        <th class="px-4 py-2">{{ __("latitud") }}</th>
        <th class="px-4 py-2">{{ __("longitud") }}</th>
        <th class="px-4 py-2">{{ __("anio") }}</th>
        <th class="px-4 py-2">{{ __("linkadicional1") }}</th>
        <th class="px-4 py-2">{{ __("linkadicional2") }}</th>
        <th class="px-4 py-2">{{ __("personasidentificadas") }}</th>
        <th class="px-4 py-2">{{ __("observaciones2") }}</th>

    </tr>
    </thead>
    <tbody>
        @forelse($forms as $form)
            <tr>
                <td class="border px-4 py-2">{{ $form->id }}</td>
                <td class="border px-4 py-2">{{ $form->fecha }}</td>
                <td class="border px-4 py-2">{{ $form->mes }}</td>
                <td class="border px-4 py-2">{{ $form->lugar }}</td>
                <td class="border px-4 py-2">{{ $form->localidad }}</td>
                <td class="border px-4 py-2">{{ $form->barrio }}</td>
                <td class="border px-4 py-2">{{ $form->tipodehecho }}</td>
                <td class="border px-4 py-2">{{ $form->personasidentificadas }}</td>
                <td class="border px-4 py-2">{{ $form->clanasociado }}</td>
                <td class="border px-4 py-2">{{ $form->movil }}</td>
                <td class="border px-4 py-2">{{ $form->observaciones }}</td>
                <td class="border px-4 py-2">{{ $form->linkdeorigen }}</td>
                <td class="border px-4 py-2">{{ $form->latitud }}</td>
                <td class="border px-4 py-2">{{ $form->longitud }}</td>
                <td class="border px-4 py-2">{{ $form->anio }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route("formularios.edit", ["formulario" => $form]) }}" class="text-blue-400">{{ __("Editar") }}</a> |
                    <a
                        href="#"
                        class="text-red-400"
                        onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $form->id }}-form').submit();"
                    >{{ __("Eliminar") }}
                    </a>
                    <form id="delete-form-{{ $form->id }}-form" action="{{ route("formularios.destroy", ["formulario" => $form->id]) }}" method="POST" class="hidden">
                        @method("DELETE")
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="18">
                    <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <p><strong class="font-bold">{{ __("No hay formularios") }}</strong></p>
                        <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar") }}</span>
                    </div>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@if($forms->count())
    <div class="mt-3">
        {{ $forms->links() }}
    </div>
@endif
@endsection
