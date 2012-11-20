<div class="content-general">  
  <div class="details">
    <ul class="cursos-list">
      <?php foreach($items as $item) : ?>
      <li>
        <a class="<?php $name_string = explode(" ", $item[$model]['nombre']); echo $name_string[0]; ?> clearfix" href="/cursos/por<?php print strtolower($model) ?>/<?php print strtolower(Inflector::slug($item[$model]['nombre'])); ?>">
          <span class="icono-curso">&nbsp;</span>
          <span class="datos-curso">
            <strong><?php echo $item[$model]['nombre']; ?></strong>
            <?php echo $item[$model]['cant_cursos']; ?> cursos
          </span>
          <span class="ic_arrow">&nbsp;</span>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>               
</div>
