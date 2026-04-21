#!/bin/bash

# Genera una còpia estàtica de la web en el directori ./static
rm -rf static
wget --recursive --no-host-directories --page-requisites --directory-prefix=static http://localhost:8080/index.html
cd public
find * -type d -name "img" -exec mkdir -p ../static/{} \;
find * -type d -name "img" -exec bash -c "cp -v -R {}/* ../static/{}" \;
cd ..
echo -n "www.perlapublica.org" > static/CNAME

# Pàgines que s'han de generar explícitament perquè no hi ha cap enllaç a elles.
#wget --recursive --no-host-directories --page-requisites --directory-prefix=static http://192.168.34.10/index-capsetes.html
wget --recursive --no-host-directories --page-requisites --directory-prefix=static http://0.0.0.0:8080/historic/2013/index.html
wget --recursive --no-host-directories --page-requisites --directory-prefix=static http://0.0.0.0:8080/historic/2017/index.html
wget --recursive --no-host-directories --page-requisites --directory-prefix=static http://0.0.0.0:8080/historic/2021/index.html

# l'argument --page-requisites fa que es generi un fitxer robots.txt
# no vàlid, que no ha d'anar a la versio estatica
rm -f static/robots.txt
