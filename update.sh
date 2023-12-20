#!/bin/bash
docker pull hacklab/mapasculturais:7.3.0
#docker pull FROM hacklab/mapasculturais:7.2.10
git pull --recurse-submodules

git submodule update

docker-compose build --no-cache
docker-compose build --no-cache --pull

./stop.sh
./start.sh
