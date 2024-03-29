<div class="container">
    <div class="row">
        <form id="form" class="col-md-6" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Todos os campos são <strong>obrigatórios</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-group">
                <label>Nome:</label>
                <input name="nome" type="text" class="form-control nome" placeholder="Digite seu nominho" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input name="email" type="email" class="form-control email" placeholder="Digite seu e-mailzinho" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input name="senha" type="password" class="form-control senha" placeholder="Digite sua senhazinha" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#form').submit(function(){
            $.ajax({
                url: './contato/send',
                data: $(this).serialize(),
                type: 'POST',
                success: function (data, textStatus, jqHR){
                    //console.log(data);
                    
                    //alert(4)

                    let title = 'danger';
                    if(data.type == 'success'){
                        title = 'Oba';
                        $('#form')[0].reset();
                        $(".alert").removeClass('alert-danger').addClass('alert-success').html(data.msg);
                    }else {
                        $(".alert").addClass("alert-danger").html(data.msg);
                        //$('.'+ data.campo).focus();
                    }

                    swal(
                        title,
                        data.msg,
                        data.type
                    )
                }
            });
        });
    })
</script>