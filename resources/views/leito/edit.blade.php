@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-info">
            <h1><a href="{{route('leito.index')}}">Leitos</a> / Alteração</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary btn-sm" href="{{route('leito.index')}}" role="button"><span class="fa fa-undo"></span></a>
        </div>
        <form method="post" action="{{route('leito.update',$leito->id)}}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="col-sm-4">
                    <label><h5><b>HOSPITAL</b></h5></label>
                    <select class="form-control" id="hospital_id" name="hospital_id" disabled required>
                        @foreach($hospital as $h)
                            <option value="{{$h->id}}" {{$leito->hospital_id==$h->id?'selected':''}}>{{$h->nome}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12">
                    <label><h5><b>LEITOS</b></h5></label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="leito_clinico">Clínicos</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->leito_clinico}}" type="text" id="leito_clinico" name="leito_clinico">
                </div>
                <div class="col-sm-3">
                    <label for="leito_cirurgico">Cirúrgicos</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->leito_cirurgico}}" type="text" id="leito_cirurgico" name="leito_cirurgico">
                </div>
                <div class="col-sm-3">
                    <label for="leito_obstetrico">Obstétrico</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->leito_obstetrico}}" type="text" id="leito_obstetrico" name="leito_obstetrico">
                </div>
                <div class="col-sm-3">
                    <label for="leito_pediatrico">Pediádrico</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->leito_pediatrico}}" type="text" id="leito_pediatrico" name="leito_pediatrico">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="leito_outro">Outros</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->leito_outro}}" type="text" id="leito_outro" name="leito_outro">
                </div>
                <div class="col-sm-3">
                    <label for="suporte_ventilatorio">Suporte Ventilátorio</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->suporte_ventilatorio}}" type="text" id="suporte_ventilatorio" name="suporte_ventilatorio">
                </div>
                <div class="col-sm-3">
                    <label for="uci_adulto">LSV Adulto</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->uci_adulto}}" type="text" id="uci_adulto" name="uci_adulto">
                </div>
                <div class="col-sm-3">
                    <label for="uci_pediatrico">LSV Pediátrico</label>
                    <input class="form-control text-right" onkeypress="isNumberKey(event)" value="{{$leito->uci_pediatrico}}" type="text" id="uci_pediatrico" name="uci_pediatrico">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary btn-sm" title="SALVAR" type="submit"><span class="fa fa-save"></span></button>
                    <a class="btn btn-danger btn-sm" title="CANCELAR" href="/leito"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection
<script>
    function isNumberKey(evt)
    {
        var char = String.fromCharCode(evt.which)
        if(!(/[0-9]/.test(char))){
            evt.preventDefault();
        }
    }
</script>
