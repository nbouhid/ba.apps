<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title><?php echo $title_for_layout; ?></title>
    <?php
      echo $this->Html->meta('icon');
      echo $this->fetch('meta');

      echo $this->Html->css('reset');
      echo $this->Html->css('response');
      echo $this->fetch('css');
      
      echo $this->Html->script('jquery');
      echo $this->Html->script('http://servicios.usig.buenosaires.gob.ar/usig-js/2.2/usig.MapaInteractivo.min.js');
      echo $this->Html->script('general');
      echo $this->fetch('script');
    ?>
  </head>
  <body class="<?php if(isset($body_classes)): echo implode(" ", $body_classes); endif; ?>">
    <header>        
      <h1>CURSOS EN LA CIUDAD</h1>
    </header>
    <? if(!empty($top_title)) : ?>
      <div class="bar-top">
        <p><?php echo $top_title; ?></p>
      </div>
    <?php endif; ?>
   
    <div id="content">
      <div class="container">
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
      </div>        
    </div>    
    <footer>
    <?php if(isset($is_homepage) && $is_homepage === true) : ?>
    
      <div>
        @Copyright Buenos Aires App 2012
      </div>
    <?php else : ?>
      <?php print $this->element('menu-nav'); ?>
    <?php endif; ?>
    </footer>
  </body>
</html>