@extends('layouts.app')

@section('content')
        <example-component v-bind:municipios="{{ $municipios }}" v-bind:hospitals="{{ $hospital }}"
                           v-bind:regional="{{ $regional }}" v-bind:dados="{{ $dadosMunicipios }}"
                           v-bind:detalhes="{{ $detalhes }}"></example-component>
@endsection
