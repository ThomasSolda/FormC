@extends("layouts.app")

@section("content")

<div class="flex justify-center bg-indigo-200 p-4 mt-5">
    <div class="text-center">
        <h1 class="mb-5">{{ __("Listado de noticias") }}</h1>
    </div>
</div>

<table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">

    <thead class="text-white">
      <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
          <th class="p-3 text-left">{{ __("id") }}</th>
          <th class="p-3 text-left">{{ __("fecha") }}</th>
          <th class="p-3 text-left">{{ __("mes") }}</th>
          <th class="p-3 text-left">{{ __("lugar") }}</th>
          <th class="p-3 text-left">{{ __("localidad") }}</th>
          <th class="p-3 text-left">{{ __("barrio") }}</th>
          <th class="p-3 text-left">{{ __("tipodehecho") }}</th>
          <th class="p-3 text-left">{{ __("personasidentificadas") }}</th>
          <th class="p-3 text-left">{{ __("clanasociado") }}</th>
          <th class="p-3 text-left">{{ __("movil") }}</th>
          <th class="p-3 text-left">{{ __("observaciones") }}</th>
          <th class="p-3 text-left">{{ __("linkdeorigen") }}</th>
          <th class="p-3 text-left">{{ __("anio") }}</th>
          <th class="p-3 text-left">{{ __("personasidentificadas") }}</th>
          <th class="p-3 text-left">Acciones</th>
      </tr>
    </thead>

    <tbody class="flex-1 sm:flex-none">
        @forelse($forms as $form)
            <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->id }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->fecha }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->mes }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->lugar }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->localidad }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->barrio }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->tipodehecho }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->personasidentificadas }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->clanasociado }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->movil }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->observaciones }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->linkdeorigen }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->anio }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $form->personasidentificadas }}</td>
                <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">
                    <a href="{{ route("formularios.edit", ["form" => $form])}}" class="text-green-400"> {{ __("Editar") }}</a>
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

<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
  th {
    background-color: #233876;
    font-size:
  }
</style>

@endsection
