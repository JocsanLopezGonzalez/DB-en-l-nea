<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("blj4scyf3vjaf7cqmccj-mysql.services.clever-cloud.com","uad6wtiil7o40zyv","ZRZHYLiYRE7lj0BoXQtN","blj4scyf3vjaf7cqmccj");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }