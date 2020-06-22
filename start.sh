#! /bin/bash

DOCROOT="$(pwd)/public"
ROUTER="$(pwd)/router.php"
HOST=0.0.0.0
PORT=8080

PHP=$(which php)
if [ $? != 0 ] ; then
    echo "No trobo la comanda php"
    exit 1
fi

$PHP -S $HOST:$PORT -t "$DOCROOT" "$ROUTER"

