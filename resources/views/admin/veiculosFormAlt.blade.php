@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Editar Veículo Cadastrado</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('veiculos.index')}}" role="button">VOLTAR</a>
        </div>
        <form method="post" action="{{route('veiculos.update',$veiculo->id)}}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="hospital_id"><b>HOSPITAL</b></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" required>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}"{{$veiculo->hospital_id==$h->id?"selected":''}} >{{$h->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3 text-center">
                    <label><b>ADMINISTRATIVO</b></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input  type="text" maxlength="3" value="{{$veiculo->administrativo_existente}}" class="form-control" style="width:90px;" id="administrativo_existente" name="administrativo_existente" placeholder="Existente">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" maxlength="3" value="{{$veiculo->administrativo_funcional}}" class="form-control" style="width:90px;" id="administrativo_funcional" name="administrativo_funcional" placeholder="Funcional">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <label><b>AMBULÂNCIA TERRESTRE</b></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" maxlength="3" value="{{$veiculo->ambulancia_terrestre_existente}}" class="form-control" style="width:90px;" id="ambulancia_terrestre_existente" name="ambulancia_terrestre_existente" placeholder="Existente">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" maxlength="3" value="{{$veiculo->ambulancia_terrestre_funcional}}" class="form-control" style="width:90px;" id="ambulancia_terrestre_funcional" name="ambulancia_terrestre_funcional" placeholder="Funcional">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <label><b>AMBULÂNCIA FLUVIAL</b></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" maxlength="3" value="{{$veiculo->ambulancia_fluvial_existente}}" class="form-control" style="width:90px;" id="ambulancia_fluvial_existente" name="ambulancia_fluvial_existente" placeholder="Existente">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" maxlength="3" value="{{$veiculo->ambulancia_fluvial_funcional}}" class="form-control" style="width:90px;"id="ambulancia_fluvial_funcional" name="ambulancia_fluvial_funcional" placeholder="Funcional">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row-12 mt-3">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/veiculos"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
