<?php
date_default_timezone_set("Europe/Amsterdam");

switch (date('H')) {
    case (date('H') >= 6):
        $bg = 'morning';
        $hallo = 'Goede morgen!';
        break;
    case (date('H') >= 12):
        $bg = 'afternoon';
        $hallo = 'Goede middag!';
        break;
    case (date('H') >= 18):
        $bg = 'evening';
        $hallo = 'Goede avond!';
        break;
    default:
        $bg = 'night';
        $hallo = 'Goede nacht!';
}

?>