<script>
    function confirmDelet(e,id){
        e.preventDefault();
        swal({
            icon:"warning",
            title: "Excluir?",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: "Cancel",
                    visible: true,
                    closeModal: true,
                    focus: true
                },
                confirm: {
                    text: "OK",
                    value: "OK",
                    visible: true,
                    closeModal: true,
                },
            },
            dangerMode: true,
        }).then((value) => {
            switch (value) {

                case "Cancel":
                    swal({
                        text: "Cancelando",
                        visible: true,
                        timer: 500,
                        buttons: false,
                    });
                    break;

                case "OK":
                    $('#form'+id).submit();
                    break;

                default:
                    break;
            }
        });
    }
</script>
