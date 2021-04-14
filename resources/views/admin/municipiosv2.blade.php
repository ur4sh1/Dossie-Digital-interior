@extends('layouts.app')

@section('content')
    <municipios-list v-bind:municipios="{{ $municipios }}" v-bind:hospitals="{{ $hospital }}"
                     v-bind:regional="{{ $regional }}" v-bind:dados="{{ $dadosMunicipios }}"
                     v-bind:detalhes="{{ $detalhes }}"></municipios-list>
@endsection
