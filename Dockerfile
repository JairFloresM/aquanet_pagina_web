# Usa una imagen oficial de PHP
FROM php:7.4-apache

# Copia tus archivos PHP al directorio de trabajo del contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80