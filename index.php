<?php
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
<div style="margin: 0 auto; padding-top: 80px;"id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
            var setting = {"height":700,"width":500,"zoom":14,"queryString":"7 Rue Lacuée, Paris, France","place_id":"ChIJOVF5zANy5kcRwWkvlhchn2Q","satellite":false,"centerCoord":[48.84972896817171,2.3693874500000156],"cid":"0x649f2117962f69c1","lang":"fr","cityUrl":"/france/paris","cityAnchorText":"Carte de Paris, Ile de France, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"379665"};
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=379665';
            s.async = true;
            s.onload = function (e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
        })();</script><a href="https://1map.com/fr/map-embed">1 Map</a>
</div>
</div>
</body>
</html>
<?php
require_once 'footer.php';
?>