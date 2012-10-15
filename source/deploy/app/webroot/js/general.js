(function($) {
  $(document).ready(function() {
    initMap();
  });
  
  function initMap() {
    var mapa_container = $('div#mapa');
    if(mapa_container.length > 0) {
      var mapa = new usig.MapaInteractivo('mapa', {
        onReady: function() {
          var markerId = mapa.addMarker(
            direccion_curso, 
            true, 
            $('div#marker_desc').html(),
            {
              iconUrl: 'http://servicios.usig.buenosaires.gov.ar/symbols/universidades.png',
              iconWidth: 21,
              iconHeight: 21,
              offsetX: 5,
              offsetY: 5
            }
            //http://servicios.usig.buenosaires.gov.ar/symbols/mapabsas/bibliotecas_patrimoniales.png
            //http://servicios.usig.buenosaires.gov.ar/symbols/tablero_de_control/sg_bibliotecas.gif
          );
        }
      });
    }
  }
})(jQuery);