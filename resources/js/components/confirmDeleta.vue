<template>
    <div class="row">
        <div class="col-3">
            <a class="btn btn-primary btn-sm ml-1" title="EDITAR" href="{{route('hospitals.edit',$h)}}" role="button"><span class="fa fa-edit"></span></a>
        </div>
        <div class="col-3">
            <form id="form{{$h->id}}" action="ed" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="${{$h->id}}">
                <button class="btn btn-danger btn-sm mr-1 ml-1" title="EXCLUIR" onclick="confirmDelet(event)" type="button"><span class="fa fa-trash"></span></button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ['form','edit','destroy'],
    data(){
      return{

      }
    },
    methods: {
        confirmDelet(e){
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
                    },
                    confirm: {
                        text: "OK",
                        value: "OK",
                        visible: true,
                        closeModal: true,
                    },
                },
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
                        this.form.submit();
                        break;

                    default:
                        break;
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
