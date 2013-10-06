#!/bin/bash

# Genera una còpia estàtica de la web en el directori ./xlp
wget --recursive --page-requisites --relative http://xlp

# Pàgines que s'han de generar explícitament perquè no hi ha
# cap enllaç a elles.
wget --recursive --page-requisites --relative http://xlp/questionari_eleccions_rector.html

