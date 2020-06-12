# Web de Per la Pública

Aquest repositori conté versió dinàmica de la web, a partir de la qual es genera una versió
estàtica que es publica al repositori [per-la-publica/per-la-publica.github.io](https://github.com/per-la-publica/per-la-publica.github.io) i és accessible des de www.perlapublica.org.

Per executar la web en local (cal tenir instal·lat PHP):

```bash
./start.sh
```
i després accedir a http://localhost:8080/

Per fer canvis al web cal modificar els fitxers que hi ha al directori `public/`. 
Un cop fets els canvis, cal generar una versió estàtica de la web, executant:

```bash
./scripts/copia_estatica.sh
```

Finalment, cal passar els fitxers que s'hauran generat sota el directori `static/`
al repositori [per-la-publica/per-la-publica.github.io](https://github.com/per-la-publica/per-la-publica.github.io).

