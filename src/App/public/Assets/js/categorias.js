
categoria = {
    novo: function () {
        $("#categoria_id").val("0");
        $("#descricao").val("");
    },
    salvar: function () {
        var id = parseInt($("#categoria_id").val());
        var descricao = $("#descricao").val();
        
        if (descricao === "" || descricao === "undefined") {
            alert('Desculpe, deve informar uma descrição');
            return;
        }
        
        $.ajax({
            beforeSend: function () {

            },
            type: 'POST',
            url: '/AdminCategorias/salvar',
            dataType: 'JSON',
            data: {id: id, descricao: descricao},
            error: function (error) {
                //alert(error.responseText);
            },
            complete: function () {
                categoria.novo();
                categoria.listar();
            }
        });
        return;
    },
    listar: function () {
        $.ajax({
            beforeSend: function () {
                $("tbody").empty();
            },
            type: 'GET',
            url: '/AdminCategorias/listar',
            success: function (data) {

                var json = $.parseJSON(data);
                $.each(json, function (k, v) {
                    $('tbody').append('<tr><td>' + v.id + '</td><td>' + v.descricao + '</td><td class="btn btn-sm glyphicon glyphicon-edit" onclick="categoria.exibir(' + v.id + ');"></td></tr>');
                });
            },
            error: function (error) {
                //alert(error.responseText);
            }
        });
        return;
    },
    exibir: function (id) {
        $.getJSON('/AdminCategorias/exibir/' + id, function (data) {
            $("#categoria_id").val(data.id);
            $("#descricao").val(data.descricao);
        });
        return;
    },
    excluir: function (id) {
        $.get('/AdminCategorias/excluir/' + id, function (data) {
            categoria.novo();
            categoria.listar();
        });
        return;
    },
    show: function () {
        $.get('/admin/categorias', function (data) {
            $("#div_admin").html(data);
        });
        return;
    }
};


