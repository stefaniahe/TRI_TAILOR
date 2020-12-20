<?php
       //conexion a la base de datos 
       $connection = new mysqli("localhost","root","","tri_tailor");
       if($connection ->connect_errno)
       {
           echo "error de conexion";
           exit;
       }
?>