<?php
   $error_url = $_SERVER["REDIRECT_STATUS"];
    
   header('Location: http://localhost/FRAMEWORK/estructura/'.$error_url);
   exit;
