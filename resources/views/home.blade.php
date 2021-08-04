@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Home</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row mb-2 align-items-center">
                            <div class="col-sm-12">
                                <div class="card-body">
                                    <h5 class="card-title">MUNICÍPIOS</h5>
                                    <a href="/municipios" class="btn btn-primary">EXIBIR</a>
                                    <button class="btn btn-primary" data-toggle="collapse"
                                            type="button" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        GERENCIAR
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/dados" class="link">INFORMAÇÕES GERAIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/hospitals" class="link">HOSPITAIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/equipamentos" class="link">EQUIPAMENTOS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/autoridade" class="link">AUTORIDADES</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/servicos" class="link">SERVIÇOS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/rhs" class="link">RH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/partido" class="link">PARTIDOS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/veiculo" class="link">VEÍCULOS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/folha" class="link">FOLHA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/programa" class="link">ATENÇÃO BÁSICA</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/doencasAgravos" class="link">DOENÇAS E AGRAVOS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/financeiro" class="link">FINANCEIRO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/coberturaVacinal" class="link">COBERTURA VACINAL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/leito" class="link">LEITOS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/exame" class="link">EXAMES</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="card" style="width: 15rem;">
                                        <div class="card-body">
                                            <a href="/internacao" class="link">INTERNAÇÃO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

