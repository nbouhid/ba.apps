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
<?php if(isset($curso['Centro']['atencion'])): ?>
    <div class="hour clearfix">
      <span>&nbsp;</span>
      <p>
        <strong>Horarios de Atenci&oacute;n</strong>
        <?php print $curso['Centro']['atencion']; ?>
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
  <p>
    <b><?php print $curso['Centro']['nombre']; ?></b><br>
    <?php print $curso['Centro']['direccion']; ?>
  </p>
</div>