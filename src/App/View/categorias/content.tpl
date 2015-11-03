
%-- $cont=1 --%
%-- foreach ( $data as $categoria ): --%
<div class="panel panel-primary">
    <div class="panel-heading bg-primary"> 
    	   <div class="panel-title"><span class="badge">{$cont}</span>      
    	      {$categoria["titulo"]}
    	   </div>
    	   <p>{$categoria["subtitulo"]}</p>
    </div>
     
    <div class="panel-body"> 
        {$categoria["conteudo"]}
    </div>

    <div class="panel-footer">
        <span class="btn btn-icon glyphicon glyphicon-thumbs-up"></span>Gostei
        <span class="btn btn-icon glyphicon glyphicon-thumbs-down"></span>Não gostei
    </div>
</div>
%-- $cont++ --%
%-- endforeach --%