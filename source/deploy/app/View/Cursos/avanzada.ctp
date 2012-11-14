<?php echo $this->Form->create(null, array()); ?>
<div class="categoria">
	<img src="lalal" />
	Elegí un 
	<?php echo $this->Form->select('categoria_id', $categorias, array('empty' => 'CURSO', 'id' => 'categoria_id', 'class' => 'select select-categoria')); ?>
</div>
<div class="barrio">
	<img src="lalal" />
	Elegí un 
	<?php echo $this->Form->select('barrio_id', $barrios, array('empty' => 'BARRIO', 'id' => 'barrio_id', 'class' => 'select select-barrio')); ?>
</div>
<?php echo $this->Form->submit('BUSCAR', array('id' => 'avanzada-buscar', 'class' => 'busqueda')); ?>
<?php echo $this->Form->end(); ?>