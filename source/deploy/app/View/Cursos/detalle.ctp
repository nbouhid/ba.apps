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
    <div class="hour clearfix">
      <span>&nbsp;</span>
      <p>
        <strong>Horarios de Atenci&oacute;n</strong>
        <?php print date('H:i', strtotime($curso['Centro']['atencion_desde'])); ?> a <?php print date('H:i', strtotime($curso['Centro']['atencion_hasta'])); ?>hs.
      </p>
    </div>
  </div>
  
  <div id="mapa"></div>
</div>