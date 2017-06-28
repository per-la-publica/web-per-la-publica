#!/bin/bash

# Genera una còpia estàtica de la web en el directori ./xlp
rm -rf static
wget --recursive --page-requisites --relative http://192.168.34.10/index.html --no-host-directories --directory-prefix=static

# Pàgines que s'han de generar explícitament perquè no hi ha
# cap enllaç a elles.
#wget --recursive --page-requisites --relative http://xlp/questionari_eleccions_rector.html
