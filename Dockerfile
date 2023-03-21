# Gestao Online - Integrador API
FROM us.gcr.io/gestao-erp-stage/go-php-core:e8a32f3

# HTML -> PDF cli tool
RUN cd /tmp && wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.buster_amd64.deb
RUN dpkg -i /tmp/wkhtmltox_0.12.6-1.buster_amd64.deb

WORKDIR /var/www
ENV APACHE_RUN_USER=www-data

# Copia os arquivos com a permissão correta
# O usuário e grupo são criados na image base
ADD --chown=1000:1000 . /var/www/

# Cria pasta de cache
RUN mkdir -p /var/www/data/cache \
 && chown -R www-data:www-data /var/www/data/cache \
 && mkdir -p /var/www/public/api-tools \
 && chown -R www-data:www-data /var/www/public/api-tools

# instalação de dependências
RUN composer install

USER www-data
