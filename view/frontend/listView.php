<?php
  ob_start();
?>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdlext-layout__sticky-header mdlext-js-sticky-header">
        <div class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"></div>
          <a class="aWithNoD" href="index.php"><h1>QUICK WORSHIP</h1></a>
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
      
      <main class="mdl-layout__content">

        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="mdl-cell mdl-cell--8-col" style ="color: rgb(0,0,0);">
            <div class="mdl-shadow--4dp mdl-cell mdl-cell--12-col">
              <div class="page-content">
                <ul class="custom-list mdl-list">
                    <?php
                    foreach($songs as $id=>$title){
                    ?>
                    <div class="mdl-list__item">
                      <a class="mdl-list__item-primary-content aWithNoD mdl-typography--text-uppercase" href="index.php?action=chartC&id=<?=$id?>">
                        <span class="title2"><?=$title?></span>
                      </a>
                    </div>
                    <?php if($id!=count($songs)-1){?>
                  <li><hr></li>
                  <?php } } ?>
                </ul>
              </div>
            </div>
          </div>
          </div>

      </main>
   </div>  




<?php
  $content = ob_get_clean();
  require('view/template.php'); 
?>
