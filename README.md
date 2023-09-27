# Configuración de un Servidor Apache en Linux

Este README proporciona una guía básica para configurar un servidor Apache en un sistema Linux. Apache es un servidor web de código abierto ampliamente utilizado para alojar sitios web y aplicaciones web. Siga estos pasos para configurar un servidor Apache en su sistema Linux.



## Requisitos previos

 - Una máquina con sistema operativo Linux instalado (por ejemplo, Ubuntu, Debian).
 - Acceso de superusuario (root) o permisos de sudo.
 - Conexión a Internet para instalar paquetes y actualizaciones.

  

### Paso 1: Actualizar el sistema

Antes de instalar Apache, asegúrese de que su sistema esté actualizado:

  

    sudo apt update


### Paso 2 Para instalar Apache, use el gestor de paquetes de su sistema:

 

     sudo apt install apache2



### Paso 3: Habilitar y arrancar Apache

Después de la instalación, habilite y arranque Apache:
Ir al navegador 

     http://localhost/


### Paso 4: Configuración de Firewall

Si está utilizando un firewall, debe permitir el tráfico HTTP (puerto 80) para que Apache funcione correctamente:



     sudo ufw allow 80/tcp

### Paso 5: Verificar el estado de Apache

Puede verificar si Apache se está ejecutando correctamente:

    sudo systemctl status apache2



## Paso 6: MariaDB
Se debe instalar un gestor de base de datos para almacenar los datos de la aplicación web. 
> **sudo apt install mariadb-server**
> **sudo mysql_secure_installation**

### Paso 7: Crear un usuario para la base de datos

    sudo mariadb
 Nota: en el campo **password** se debe colocar lo que prefiera el usuario.
 
    mariadb[(none)]> GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;`
    mariadb[(none)]> FLUSH PRIVILEGES;
    mariadb[(none)]> exit
    mariadb -u admin -p
	Enter password: password
    
    
  
### Paso 8: Instalación de PHP

    sudo apt install php libapache2-mod-php php-mysql

### Paso 9: Copiar el proyecto php a la ruta /var/www/html/

    cp -r ./pelis/* var/www/html/

### Paso 10: Cargar el script de la base de datos

    mariadb -u admin -p
    mariadb[(none)]> source /pelis/db/peliculas.sql


### Paso 11: Visualizar la aplicación web desplegada en el servidor.
Abra su navegador web y visite la dirección IP de su servidor o el nombre de dominio si lo ha configurado. Debería ver la página de inicio de Apache, lo que indica que su servidor web está funcionando.

  

    http://localhost/


  ### Link del repositorio en GITHUB
  > [https://github.com/j3tjet/pelis](https://github.com/j3tjet/pelis)
