<?php
    function URL($name, $type){
      if($type == "css"){
        include(CSS);
          if(file_exists(CSS)){
              foreach($URLCSS as $nombre=>$row)
              {
                  if($name==$nombre){
                    return($row);
                  }
              }
          }else{
              return("ERROR");
          }
      }elseif($type == "js"){
        include(JS);
          if(file_exists(JS)){
              foreach($URLSCRIPT as $nombre=>$row)
              {
                  if($name==$nombre){
                      return($row);
                  }
              }
          }else{
              return("ERROR");
          }
      }
    }

    function load_css($file){
      $URL = URL($file,'css'); 
      if(($URL != "ERROR")||($URL != "")){
        if (is_file($URL)) {
          $t = @filemtime($URL);
        }  
        if(isset($t)){
          $URL .= '?t='.$t;
          print '<link href="'.$URL.'" rel="stylesheet" type="text/css">';
        }else{
          $tipo="Error";
          $titulo="No encontramos el archivos";
          $msm="Verifica que la ruta o el nombre esten bien escritos <br>Nombre del archivo no encontrado: <b>".$file."</b>";
          
          error_system($tipo, $titulo, $msm);
        }
        
      }else{
        $tipo="Error";
          $titulo="No encontramos el archivos";
          $msm="Verifica que la ruta o el nombre esten bien escritos <br>Nombre del archivo no encontrado: <b>".$file."</b>";
          
          error_system($tipo, $titulo, $msm);
      }
    }

    function load_js($file){
      $URL = URL($file,'js');
      if(($URL != "ERROR")||($URL != "")){
        if (is_file($URL)) {
          $t = @filemtime($URL);
        }
        if(isset($t)){
          $URL .= '?t='.$t;
          print '<script type="text/javascript" src="'.$URL.'"></script>';
        }else{
          $tipo="Error";
          $titulo="No encontramos el archivos";
          $msm="Verifica que la ruta o el nombre esten bien escritos <br>Nombre del archivo no encontrado: <b>".$file."</b>";
          
          error_system($tipo, $titulo, $msm);
        }
        
      }else{
        $tipo="Error";
          $titulo="No encontramos el archivos";
          $msm="Verifica que la ruta o el nombre esten bien escritos <br>Nombre del archivo no encontrado: <b>".$file."</b>";
          
          error_system($tipo, $titulo, $msm);
      }
    }

    function load_file($file)
    {
      if (is_file($file)) {
        $t = @filemtime($file);
      }
      if (isset($t)) {
        $file .= '?t='.$t;
      }else{
        print "ERROR";
      }
      print $file;
    }
?>