

<div class="container">

    <main>

    <div class="row">

     <header class="topo">
        <hgroup>
        <h1 class="titulo">{$flashmsg}</h1>
        <h2 class="slogan">Aplicação didática</h2>
        </hgroup>
    </header>

    <nav>
          <div id="php" 
               class="circulo inline php5-icon" 
               title="PHP">             
          </div>

          <div id="html5" 
               class="circulo inline html5-icon" 
               title="HTML5">               
          </div>

          <div id="css" class="circulo inline css3-icon" title="CSS3"></div>
          <div id="js" class="circulo inline js-icon" title="JS"></div>
          <div id="sobre" class="circulo-sobre inline sobre-icon" title="Sobre o sistema"></div>
    </nav>
    <section class="column col-md-3 col-sm-3 col-xm-6">

     <aside class="sidebar">
         <ul class="list-group inline">
             <li class="list-group-item">
                <span class="btn glyphicon glyphicon-home"></span><a href="/home">Inicio</a>
             </li>
             <li class="list-group-item inline">
               <span class="btn glyphicon glyphicon-book"></span><a href="/artigos">Artigos</a>
             </li>
            <li class="list-group-item inline">
               <span class="btn glyphicon glyphicon-blackboard"></span><a href="/apresentacoes">Apresentações</a>
            <li class="list-group-item inline">
               <span class="btn glyphicon glyphicon-calendar"></span><a href="/eventos">Eventos</a>
            </li>               
            </li>
        </ul>
   </aside>

</section>

<section id="content" class="column col-md-9 col-sm-2 col-sx-6">

          %-- if ( isset($data["contents"]) ): --%
           
          %-- $tpl_conteudo = new \Core\View\TemplateWFW("../View/".$data["contents"]) --% 
          %-- $tpl_conteudo->parse($data["content"]) --%

           %-- else: --%

            <div class="row">

            %-- for($i=1;$i<=27;$i++): --%

            <div class="col-md-6">
            <div class="panel panel-primary">
               <div class="panel-heading bg-primary">
                   <div class="panel-title">Título do Painel</div>
               </div>
               <div class="panel-body">
                  <p>
                     Corpo do painel
                  </p>
               </div>
               <div class="panel-footer">
                   Rodapé do painel...
               </div>
            </div>

            </div>
 
            %-- endfor --%
            </div>



          %-- endif --%
         
</section>

</div>
     <footer class="well well-sm text-center">
        
        <p><span class="text-info">&copy;{date('Y')}</span>
          <strong>WSCom - Consultoria, Treinamento e Desenvolvimento</strong><br />
          <em>cnpj: 21.000.563/0001-50 Travessa Santo André,91 - Santo André, Vitória-ES - cep: 29.032-267</em><br />
        Analista Responsável: Wanderlei Silva do Carmo <wander.silva@gmail.com>
          <br /><a href="mailto:wander.silva@gmail.com">wander.silva@gmail.com</a>
        </p>

    </footer>
</main>

</div>  
