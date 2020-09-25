<?php
  ob_start();
?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      
      <main class="mdl-layout__content">

      <div class="mdl-grid">
            <!-- cellule de mise en page pour pc -->
            <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <!-- celulle englobante -->
            <div class="mdl-cell mdl-cell--8-col" style ="color: rgb(0,0,0);">
            <!-- première cellule de contenu -->
            <div class="mdl-shadow--4dp mdl-cell mdl-cell--12-col page-content custom-text title1" style ="color: rgb(0,0,0)">
              <span class='mdl-typography--text-uppercase'><?=$chart['title']?>&nbsp;(<?=$chart['tonality']?>)</span>
            </div>
            
            <div class="mdl-shadow--4dp mdl-cell mdl-cell--12-col page-content" style ="color: rgb(0,0,0)">
              
                <?=$content?>
                
            </div>
          
            </div>
        </div>

      </main>
   </div>  



<?php
  $content = ob_get_clean();
  require('view/template.php'); 
?>