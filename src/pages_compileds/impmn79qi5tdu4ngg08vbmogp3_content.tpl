<?php $cont = 1  ;?>
<?php foreach ( $data as $apres ):  ;?>
<div class="panel panel-primary">
    <div class="panel-heading bg-primary"> 
    	   <div class="panel-title"><span class="badge"><?=$cont ;?></span>      
    	      <?=$apres["titulo"] ;?>
    	   </div>
    	   <p><?=$apres["subtitulo"] ;?></p>
    </div>
     
    <div class="panel-body"> 
        <?=$apres["conteudo"] ;?>
    </div>

    <div class="panel-footer">
        <span class="btn btn-icon glyphicon glyphicon-thumbs-up"></span>Gostei
        <span class="btn btn-icon glyphicon glyphicon-thumbs-down"></span>Não gostei
    </div>
</div>
<?php $cont++  ;?>
<?php endforeach  ;?>
