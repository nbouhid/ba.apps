<?php 
$links = array('/categorias' => 'CURSOS',
               '/barrios' => 'BARRIOS',
               '/centros' => 'CENTROS',
               '/cursos/avanzada' => 'BUSQUEDA'
               );
?>
<ul class="menu">
  <?php foreach($links as $url => $link): 
    $params = array();
    $params['escape'] = false;
    if($this->here==$url) {
      $params['class'] = 'active'; 
    } 
  ?>
    <li class="<?php print strtolower($link); ?>"><?php print $this->Html->link('<span class="ic_btn">&nbsp;</span>' . $link, $url, $params);?></li>
  <?php endforeach; ?>
</ul>