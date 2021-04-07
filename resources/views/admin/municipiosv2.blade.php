@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Pesquisa de Municípios</h1>
        </div>
        <form method="post" >
            <div class="row mt-3">
                <div class="col-sm-2 border">
                    <label>Selecione</label>
                </div>
                <div class="col-sm-4 border">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Municipios
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            @foreach($municipio as $m)
                                <button class="dropdown-item" value="{{$m->id}}" type="button">{{$m->nome}}</button>
                            @endforeach
                        </div>
                        <example-component></example-component>
                    </div>
                </div>
                <div class="col-sm-6 border">
                </div>
            </div>
        </form>
        <script>
            import ExampleComponent from "../../js/components/ExampleComponent";
            export default {
                components: {ExampleComponent}
            }
        </script>
@endsection
