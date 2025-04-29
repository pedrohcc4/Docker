# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Habilita extensões do PHP se necessário
RUN docker-php-ext-install pdo pdo_mysql

# Copia os arquivos do projeto para a pasta do Apache
COPY . /var/www/html/

# Dá permissão para os arquivos
RUN chown -R www-data:www-data /var/www/html/

# Expõe a porta padrão do Apache
EXPOSE 80
