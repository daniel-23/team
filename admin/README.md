#TeamShop

Para la instalacion se debe colocar el proyecto en el seervidor web

Si el proyecto esta en la raiz del servidor se debe configurar la constante 
APP_ROOT en el archivo index.php linea 6 con el valor '/' pero si el proyecto queda detro de una o varias carpetas en su servidor web se poner la ruta hasta la raiz de proyecto en APP_ROOT ej: '/carpeta1/carpeta2'

Configurar los parametros de conexion a la BBDD en el archivo models/Connection.php
