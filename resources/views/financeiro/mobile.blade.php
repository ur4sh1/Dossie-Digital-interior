
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    RECURSO ESTADUAL
                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="text-right">
                    <a class="btn-sm" href="{{route('recursoEstadualCreate',$municipio->id)}}">GERENCIAR</a>
                </div>
                @include('recursoEstadual.mobile')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    RECURSO FUNDO ESTADUAL
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <div class="text-right">
                    <a class="btn-sm" href="{{route('recursoFundoEstadualCreate',$municipio->id)}}">GERENCIAR</a>
                </div>
                @include('recursoFundoEstadual.mobile')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    RECURSO FUNDO NACIONAL
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <div class="text-right">
                    <a class="btn-sm" href="{{route('recursoFundoNacionalCreate',$municipio->id)}}">GERENCIAR</a>
                </div>
                @include('recursoFundoNacional.mobile')
            </div>
        </div>
    </div>
</div>

