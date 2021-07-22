@if($msg>0)
    @if($msg==1)
        <script>
            swal({
                title: "Efetuado com Sucesso!",
                icon: "success",
            });
        </script>
    @endif
    @if($msg==2)
        <script>
            swal({
                title: "Algo deu Errado!",
                icon: "error",
            });
        </script>
    @endif
@endif

