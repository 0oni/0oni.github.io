<br>
<h1>EXTENSIONES DE LA UTC</h1>
<img src="<?php echo base_url('assets/img/marcador_utc.png'); ?>" alt"Logo UTC">
<br>
<div id="mapa1" style="width:80%; height:600px; border:2px solid black;">
</div>
<script type="text/javascript">
    function initMap(){
      var coordenadaCentral=new google.maps.LatLng(-0.9993908022792514, -78.61914154052016);
      var miMapa=new google.maps.Map(document.getElementById('mapa1'),
      {
        center: coordenadaCentral,
        zoom:9,
        mapTypeId: google.maps.MapTypeId.ROADDMAP
      }
    );
    var marcadorUTC=  new google.maps.Marker({position:new google.maps.LatLng(-0.9993908022792514, -78.61914154052016),
      map: miMapa,
      title: " MATRIZ UTC" ,
      icon:'<?php echo base_url('assets/img/marcador_utc.png'); ?>'
    });
    var marcadorUTC=  new google.maps.Marker({position:new google.maps.LatLng(-0.9991379299439093, -78.62334875305652),
      map: miMapa,
      title: " utc campus salache"
    });
    var marcadorUTC=  new google.maps.Marker({position:new google.maps.LatLng(-0.958134007003039, -78.69645917698118),
      map: miMapa,
      title: " utc campus pujili"
    });  var marcadorUTC=  new google.maps.Marker({position:new google.maps.LatLng(-0.9474111477655262, -79.22862489692751),
        map: miMapa,
        title: " utc campus la mana" ,
        icon:'<?php echo base_url('assets/img/marcador_utc.png'); ?>'
      });

    }
</script>
