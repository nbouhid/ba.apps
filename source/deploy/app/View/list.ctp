<div class="content-general">  
  <div class="details">
    <ul class="cursos-list">
      <?php foreach($items as $item) : ?>
      <li>
        <a class="fotografia clearfix" href="/cursos/por<?php print strtolower($model) ?>/<?php print Inflector::slug($item[$model]['nombre']) ?>">
          <span class="icono-curso">&nbsp;</span>
          <span class="datos-curso">
            <strong><?php echo $item[$model]['nombre']; ?></strong>
            123 cursos
          </span>
          <span class="ic_arrow">&nbsp;</span>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>               
</div>
