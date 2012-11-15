<?php echo $this->Form->create(null, array('class' => 'categoria-busqueda')); ?>
<div class="categoria">
	<img class="icono-curso" src="../img/ic_cursos.png" alt="CURSOS" />
        <div class="container-data">
            <p>Eleg&iacute; un</p>
            <?php echo $this->Form->select('categoria_id', $categorias, array('empty' => 'CURSO', 'id' => 'categoria_id', 'class' => 'select select-categoria')); ?>
        </div>
</div>
<div class="barrio">
    <img class="icono-barrios" src="../img/ic_barrios.png" alt="BARRIOS" />
    <div class="container-data">
        <p>Eleg&iacute; un</p> 
        <?php echo $this->Form->select('barrio_id', $barrios, array('empty' => 'BARRIO', 'id' => 'barrio_id', 'class' => 'select select-barrio')); ?>
    </div>
</div>
<?php echo $this->Form->submit('BUSCAR', array('id' => 'avanzada-buscar', 'class' => 'busqueda')); ?>
<?php echo $this->Form->end(); ?>