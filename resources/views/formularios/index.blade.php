@extends("layouts.app")

@section("content")

<div class="flex justify-center bg-indigo-200 p-4 mt-5">
    <div class="text-center">
        <h1 class="mb-5">{{ __("Listado de noticias") }}</h1>
    </div>
</div>

<table class="border-separate border-2 text-center border-gray-500 mt-3 responsive" style="width: 100%">
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
        <th class="px-4 py-2">{{ __("anio") }}</th>
        <th class="px-4 py-2">{{ __("personasidentificadas") }}</th>
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
                <td class="border px-4 py-2">{{ $form->anio }}</td>
                <td class="border px-4 py-2">{{ $form->personasidentificadas }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route("formularios.edit", ["form" => $form])}}" class="text-blue-400"> {{ __("Editar") }}</a>
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
