#!/bin/bash

# Genera una còpia estàtica de la web en el directori ./xlp
rm -rf static
wget --recursive --no-host-directories --page-requisites --directory-prefix=static http://192.168.34.10/index.html
mkdir -p static/img/; cp -R public/img/* static/img/
mkdir -p static/historic/2013/img/; cp -R public/historic/2013/img/* static/historic/2013/img/
echo -n "www.perlapublica.org" > static/CNAME

# Pàgines que s'han de generar explícitament perquè no hi ha
# cap enllaç a elles.
#wget --recursive --page-requisites --relative http://xlp/questionari_eleccions_rector.html
