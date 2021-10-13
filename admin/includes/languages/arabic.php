<?php
function lang($pharse){
   static $lang = array (
        'message'=>'اهلا',
        'admin'=>'ادمن'
   );
    return $lang[$pharse];
}