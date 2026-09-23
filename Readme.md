1. ¿Qué hace el proyecto?
Este proyecto es un sistema web de inventario orientado al registro, consulta y gestión básica de productos. Permite agregar nuevos productos, visualizar el listado actual y mantener un control sencillo del stock disponible.

2. ¿Qué tecnologías utiliza?:
PHP como lenguaje de programación del lado del servidor.
CSS para el diseño y estilos de la interfaz.
MySQL / MariaDB como sistema de gestión de base de datos.


3. ¿Qué se necesita instalar?
Para poder ejecutar el proyecto se requiere:
Un editor de código (por ejemplo: Visual Studio Code, Sublime Text, etc.).
Un servidor local que incluya PHP y MySQL/MariaDB (recomendados: XAMPP, Laragon o Herd).
Un gestor de bases de datos (como MySQL Workbench o HeidiSQL).
Tener instalado MySQL o MariaDB en el equipo.


4. ¿Cómo se configura y ejecuta?

Descargar el archivo ZIP del proyecto y extraerlo en una carpeta de preferencia.
Abre tu gestor de bases de datos (MySQL Workbench, HeidiSQL u otro) y ejecuta el script de creación de la base de datos incluido en el proyecto.
Asegúrar de crear primero la base de datos con el comando:SQLCREATE DATABASE inventario;
Verificar que la base de datos y la tabla productos se hayan creado correctamente.
Abrir el proyecto con el editor de código (por ejemplo, Visual Studio Code).
Localizar el archivo conexion.php y revisar que los datos de conexión sean correctos:
Host del servidor
Nombre de la base de datos (inventario)
Usuario y contraseña de MySQL/MariaDB

Copiar o mover la carpeta del proyecto a la carpeta de el servidor local (htdocs en XAMPP, www en Laragon, etc.).
Iniciar el servidor (Apache y MySQL/MariaDB) desde el entorno de desarrollo.
Abrir el navegador y acceder a la ruta correspondiente.

Si todos los pasos se realizaron correctamente, se podra visualizar la interfaz del sistema y comenzar a utilizarlo.