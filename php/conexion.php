<?php
$servername="ADMIN-H-E-0267";
$conectioninfo=array("Database"=>"laboratorio1","UID"=>"sa","PWD"=>"");

$conexion = sqlsrv_connect($servername,$conectioninfo);

if (!$conexion){

echo "Conexion exitosa";
}else {
  echo "error en la conexion";
}

 ?>
