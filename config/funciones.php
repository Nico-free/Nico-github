<?php
// funcion para las rutas
function ruta($urlruta){
    $seguridad = 'http://';
    $Name_Proyect = 'FRAMEWORK/estructura';
    $dominio = $seguridad.$_SERVER['HTTP_HOST'].'/'.$Name_Proyect.'/';

    print $dominio.$urlruta;
}
//FUNCION DE LOS DOMINIOS
function dominio($ruta){
    $dominio = 'http://localhost/FRAMEWORK/estructura/';
    return $dominio.$ruta;
}
// FUNCION PARA VER LOS DATOS DEL USUARIO LOGUEADO
function DatosUser(){
    echo '<input type="hidden" name="codigoID" id="Codigoid" value="'.$_SESSION['id'].'">';
}
//NOTIFICACIONES SISTEMA
function error_system($tipo,$titulo,$msm){
    echo "<script>
            message_systema('".$tipo."','".$titulo."','".$msm."');
    </script>";
}
// NOTIFICACIONES TOAST
function toast($tipo, $titulo, $msm){
    echo "<script>
        notification_toast('".$tipo."','".$titulo."','".$msm."');
    </script>";
}

