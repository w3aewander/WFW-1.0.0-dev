<div class="panel panel-danger">
    <div class="panel-heading">
        <div class="panel-title">
            <h2>Categorias</h2>
        </div>
    </div>
    <div class="panel panel-body">

        <div class="form-group">

            <div class="control-group">
                <label class="control-label">Código:</label>
                <input type="number" class="form-control" id="categoria_id" name="categoria_id" />
            </div>
            <div class="control-group">
                <label class="control-label">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" />
            </div>

            <br />

            <div class="well btn-group-lg">
                <button class="btn btn-sm btn-primary glyphicon glyphicon-new-window" onclick="categoria.novo();"> Novo</button>
                <button class="btn btn-sm btn-primary glyphicon glyphicon-save-file" onclick="categoria.salvar();"> Salvar</button>
                <button class="btn btn-sm btn-primary glyphicon glyphicon-list-alt"  onclick="categoria.listar();"> Listar</button>
                <button class="btn btn-sm btn-primary glyphicon glyphicon-remove"  onclick="categoria.excluir($('#categoria_id').val());"> Excluir</button>
            </div>

            
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th width="5%">Código</th>
                        <th width="95%">Descrição</th>
                        <th  class="glyphicon glyphicon-cog"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td class="btn glyphicon glyphicon-edit"></td>  
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
            </table>
                   
                   
            
        </div>


    </div>
    <div class="panel-footer">

    </div>
</div>