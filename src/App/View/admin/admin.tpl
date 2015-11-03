%-- $html = new \Core\View\Html()  --%
{$html->Open()}
<div class="panel panel-default">
    <div class="panel-body">    
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <h1>{$data["titulo"]}</h1>
                    <span>{$data["subtitulo"]}</span>
                </div>
                <div class="panel-body">


                    <div  
                        id="div_admin" 
                        style="width:100%;height: 600px">
                        {file_get_contents('../View/admin/dashboard.tpl') }
                    </div>



                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
    </div>
</div>
{$html->Close()}