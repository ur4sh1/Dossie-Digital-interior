@extends('layouts.app')

@section('content')
    <municipios-list :municipios="{{ $municipios }}" :hospitals="{{ $hospital }}"
                     :regional="{{ $regional }}" :dados="{{ $dadosMunicipios }}"
                     :detalhes="{{ $detalhes }}" :leitos="{{ $leitos }}"
                     :autoridades="{{ $autoridades }}" :cargos="{{ $cargos }}"
                     :partidos="{{ $partidos }}" :internacaos="{{ $internacaos }}"
    ></municipios-list>
@endsection
