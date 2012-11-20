<div class="content-general">  
  <div class="details">
    <div class="place clearfix">
      <span>&nbsp;</span>
      <p>
        <strong><?php print $curso['Centro']['nombre']; ?></strong>
        <?php print $curso['Centro']['direccion']; ?>
      </p>
    </div>
    <div class="duration clearfix">
      <span>&nbsp;</span>
      <p>
        <strong>Duraci&oacute;n</strong>
        Cuatrimestral
      </p>
    </div>
    <div class="phone  clearfix">
      <span>&nbsp;</span>
      <p>
        <strong>Tel&eacute;fono</strong>
        <?php print $curso['Centro']['telefono']; ?>
      </p>
    </div>
<?php if(isset($curso['Centro']['atencion_desde'])): ?>
    <div class="hour clearfix">
      <span>&nbsp;</span>
      <p>
        <strong>Horarios de Atenci&oacute;n</strong>
        <?php print date('H:i', strtotime($curso['Centro']['atencion_desde'])); ?> a <?php print date('H:i', strtotime($curso['Centro']['atencion_hasta'])); ?>hs.
      </p>
    </div>
<?php endif; ?>
  </div>
  
  <div id="mapa"></div>
</div>
<?php //TODO: Research a better way to do this ?>
<script type="text/javascript">
  var direccion_curso = '<?php print $curso['Centro']['direccion']; ?>';
</script>
<div id="marker_desc" style="display: none;">
<?php print $curso['Centro']['nombre']; ?><br><br><p style="color: red;">sarasa</p>
</div>