(function($) {
  $(document).ready(function() {
    initMap();
  });
  
  function initMap() {
    var mapa_container = $('div#mapa');
    if(mapa_container.length > 0) {
      var mapa = new usig.MapaInteractivo('mapa', {
        onReady: function() {
            /*var markerId4 = mapa.addMarker('corrientes 222', true, 'magic software factory');

            // Marcador con icono personalizado 
            var markerId5 = mapa.addMarker(
                    'perú 652', 
                    false, 
                    'Banco',
                    {
                        iconUrl: 'http://servicios.usig.buenosaires.gov.ar/symbols/mapabsas/bancos.png',
                        iconWidth: 41,
                        iconHeight: 41,
                        offsetX: 5,
                        offsetY: 5
                    }
            );*/
        }
      });   
    }
  }
})(jQuery);