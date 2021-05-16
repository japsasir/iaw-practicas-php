# Script para lanzar un contenedor docker con persistencia de datos. Empezamos instalado y habilitando docker.
apt update
apt install docker -y
systemctl enable docker
systemctl start docker 
# Especificamos un nombre y la versión de apache para utilizar.
docker run -d --rm --name my-apache-php-app -p 80:80 -v "$PWD":/var/www/html php:7.4-apache