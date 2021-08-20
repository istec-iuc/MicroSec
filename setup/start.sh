#!/bin/bash

# Berkant DEMİRCİ

NAME=$(echo $1 | md5sum | tr -d "-")
docker run --rm --name $NAME -d -p 0:80 $2
port=$(docker port $NAME 80 | tr -d "0.0.0.0:")
echo $port
