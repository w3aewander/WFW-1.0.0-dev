%-- $cont=1 --%
%-- foreach ( $data as $evento ): --%

<div class="panel panel-primary">
    <div class="panel-heading bg-primary"> 
    	   <div class="panel-title"><span class="badge">{$cont}</span>      
    	      {$evento["titulo"]}
    	   </div>
    	   <p>{$evento["subtitulo"]}</p>
    </div>
     
    <div class="panel-body"> 
        {$evento["conteudo"]}
    </div>

    <div class="panel-footer">
        <span class="btn btn-icon glyphicon glyphicon-thumbs-up"></span>Gostei
        <span class="btn btn-icon glyphicon glyphicon-thumbs-down"></span>Não gostei
    </div>
</div>
%-- $cont++ --%
%-- endforeach --%
