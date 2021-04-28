@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Painel de controle</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row mb-2 align-items-center">
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">MUNICÍPIOS</h5>
                                        <p class="card-text">Exibe a lista de municípios e as informações gerais de cada um.</p>
                                        <a href="/municipios" class="btn btn-primary">EXIBIR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">HOSPITAIS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua hospitais no sistema.</p>
                                        <a href="/hospitals" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">EQUIPAMENTOS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua equipamentos no sistema.</p>
                                        <a href="/equipamentos" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">AUTORIDADES</h5>
                                        <p class="card-text">Cadastre, edite ou exclua autoridades no sistema.</p>
                                        <a href="/autoridades" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">SERVIÇOS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua serviços no sistema.</p>
                                        <a href="/servicos" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">RH</h5>
                                        <p class="card-text">Cadastre, edite ou exclua registros no sistema.</p>
                                        <a href="/rhs" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">PARTIDOS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua partidos no sistema.</p>
                                        <a href="/partidos" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">VEÍCULOS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua serviços no sistema.</p>
                                        <a href="/veiculos" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">FOLHA</h5>
                                        <p class="card-text">Cadastre, edite ou exclua registros no sistema.</p>
                                        <a href="/folhas" class="btn btn-primary">GERENCIAR</a>
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
