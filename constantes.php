<?php

//define('ROOT_PATH', rtrim($_SERVER['DOCUMENT_ROOT'], '/'));
define('ROOT_PATH', rtrim(dirname(__FILE__), '/'));
define('WEB_PATH', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'));
define('BD_USUARIO', 'root');
define('BD_CONTRASENA', 'root');
define('BD_NOMBRE_BD', 'proyecto_p4');
define('BD_SERVIDOR', 'localhost');


//'http://localhost:8888/Ulatina/Semana11/Ejemplo_MVC/persona.php?action=edit&id=1'