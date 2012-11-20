<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="utf-8" />
	 <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no,width=device-width,height=device-height">

    <title><?php echo $title_for_layout; ?></title>
    <?php
      echo $this->Html->meta('icon');
      echo $this->fetch('meta');

      echo $this->Html->css('reset');
      echo $this->Html->css('response');
      echo $this->fetch('css');
      
      echo $this->Html->script('jquery');
      echo $this->Html->script('http://servicios.usig.buenosaires.gob.ar/usig-js/2.3/usig.MapaInteractivo.min.js');
      echo $this->Html->script('general');
      echo $this->fetch('script');
    ?>
  </head>
  <body class="<?php if(isset($body_classes)): echo implode(" ", $body_classes);else: echo 'home'; endif; ?>">
    <header>
      <?php if(isset($is_homepage) && $is_homepage === true) : ?>
        <?php else:?>
        <div class="container-back"><span>&nbsp;</span><a href="javascript:history.back();" title="volver">volver</a></div>
      <?php endif;?>
      <h1><a href="/" title="INICIO - CURSOS EN LA CIUDAD">CURSOS EN LA CIUDAD<span class="beta">Beta</span></a></h1>
    </header>
    <?php if(!empty($top_title)) : ?>
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
      <img src="img/logo-footer-desktop.png" alt="Buenos aires App" class="logo-footer" />
      <div class="footer-text">
        @Copyright Buenos Aires App 2012
      </div>
    <?php else : ?>
      <?php print $this->element('menu-nav'); ?>
    <?php endif; ?>
    </footer>
  </body>
</html>