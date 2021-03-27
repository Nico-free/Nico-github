<?php 

function componente($ruta,$archivo){
    $file = $ruta.$archivo.".php";
    if (is_file($file)) {
        return include("".$file."");
      }else{
        return "ERROR";
      }   
}