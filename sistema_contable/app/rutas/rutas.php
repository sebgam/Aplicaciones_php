<?php

//----------TODAS LAS RUTAS DISPONIBLES EN NUESTRA APP----------

$ruta= new ruta();
$ruta->controladores(array(
    "/"=>"principalControler",
    "/usuarios"=>"usuarioController"
));