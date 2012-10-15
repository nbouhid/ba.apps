<div class="content-general">  
  <div class="details">
    <ul class="cursos-list">
      <?php foreach($items as $item) : ?>
      <li>
        <a class="clearfix" href="/cursos/<?php echo $item['Curso']['id'];?>">
          <span class="datos-curso">
            <strong><?php echo $item['Curso']['nombre']; ?></strong>
            <?php echo $item['Centro']['direccion']; ?>
            <span class="phone"><?php echo $item['Centro']['telefono']; ?></span>
          </span>
          <span class="ic_arrow">&nbsp;</span>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>               
</div>