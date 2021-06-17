@if($msg>0)
    @if($msg==1)
        <div class="alert alert-success text-center" id="alerta" role="alert">
            Efetuado com Sucesso!
        </div>
        <span hidden>{{ $msg=0 }}</span>
    @endif
    @if($msg==2)
        <div class="alert alert-danger text-center" id="alerta" role="alert">
            Algo deu Errado!
        </div>
        <span hidden>{{ $msg=0 }}</span>
    @endif
@endif
