@extends('layouts.app')

@section('content')
    <municipios-list :municipios="{{ $municipios }}" :hospitals="{{ $hospital }}"
                     :regional="{{ $regional }}" :dados="{{ $dadosMunicipios }}"
                     :detalhes="{{ $detalhes }}" :leitos="{{ $leitos }}"
                     :autoridades="{{ $autoridades }}" :cargos="{{ $cargos }}"
                     :partidos="{{ $partidos }}" :internacaos="{{ $internacaos }}"
                     :equipamentos="{{ $equipamentos }}" :tipo_equipamentos="{{ $tipo_equipamentos }}"
                     :folhas="{{ $folhas }}"
    ></municipios-list>
@endsection
