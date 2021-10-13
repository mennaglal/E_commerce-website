<?php
function lang($pharse){
   static $lang = array (
        'mem'=>'Member',
        'cat'=>'Categories',
        'adminhome'=>'Home',
        'item'=>'Items',
        'log'=>'Logs',
        'stat'=>'Statistics'
   );
    return $lang[$pharse];
}
?>