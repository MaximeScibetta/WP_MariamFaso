<?php $fields = get_fields(); ?>
<h3 class="visuallyhidden">Où ?</span>
            </h3>
            <div class="map">
                <div id="map"></div>
                <div class="map-c">
                    <h4><?php the_title();?></h4>
                    <p>Quand ? <?= $fields['length']; ?></p>
                    <p>Ou ? <?php dw_the_places(' > ', '<strong class="post__place post__place--:type">', '</strong>');?></p>
                    <p>Combien ? <?= $fields['price']; ?></p>
                    <a href="./contact.html" class="btn-1">Nous contacer</a>
                    <a href="./dons.html" class="btn-2">Participer</a>
                </div>
            </div>
            
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVA_O8C3KixYaKtQ8SbWHItWCEPHXFRao"></script>
<script>
    var myCenter = new google.maps.LatLng(12.2667, -2.06667);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 7,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
        </section>