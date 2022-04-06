# tienda-rpfarma-
Panel Administrativo, y tienda online de medicamentos

# Programas requeridos para el proyecto
- Xampp, Laragon o wampstack como servidor para php
- Composer
- Git

# Pasos para iniciar el proyecto a nivel local
- Clonar el proyecto por medio de la consola, ubicandote en la carpeta htdocs o donde uses xampp
- utilizar el comando git clone https://github.com/Rosanyelis/tienda-rpfarma-.git
- luego que descargue el proyecto colocar el comando
- cd tienda-rpfarma- , esto lo ubicara dentro del proyecto, y luego ejecutara los siguientes comandos
- composer install, instalara las dependencias del proyecto
- crear en visual code u otro programa de edición de codigo un archivo denominado .env
- copiar del archivo .env.example, toda la estructura de codigo y pegarla en el archivo .env que acabas de crear,
- luego coloca las credenciales de la bases de datos, guarda 
- cierras el archivo y luego correr en consola el comando:
- php artisan key:generate
- finalizado el proceso, utiliza la bases de datos adjunta


Si deseas un proyecto de cero, sin una bases de datos auxiliar, utiliza las migraciones de la siguiente forma
- ubicate nuevamente en consola, en la carpeta del proyecto
- ejecuta el comando php artisan migrate
- creara todas las tablas de bases de datos necesarias que estan en codigo
- luego ejecutar php artisan db:seed, y cargar los datos predeterminados del sistema en la bases de datos
