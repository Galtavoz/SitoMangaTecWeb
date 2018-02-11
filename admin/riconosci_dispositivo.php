<!doctype html>
<head><meta charset="utf-8"></head>

<?php

//Includi la classe
require('Mobile-Detect/Mobile-Detect/Mobile_Detect.php');

//Crea un'instanza della classe
$detect = new Mobile_Detect;

//Utilizza il metodo isMobile() per verificare se il disposivo è un telefono o un tablet
if ( $detect->isMobile() ) {
   include("sopramobile.php");
}else{
   include("sopra.php");
}

//Utilizza il metodo isTablet() per verificare se il dispositivo è un tablet
//if( $detect->isTablet() ){
//   include("sopram.html");
//}

//Utilizza questa espressione condizionale per verificare se il dispositivo è un telefono
//if( $detect->isMobile() && !$detect->isTablet() ){
//   echo '<p>Questo dispositivo è un telefono.</p>';
//}?>