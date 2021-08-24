#!/bin/bash

# Berkant DEMİRCİ

if ! [ $(id -u) = 0 ]; then
   echo "I am not root!"
   exit 1
fi

for req in ssh docker  
do
command -v $req >/dev/null 2>&1 || { echo >&2 "I require $req but it's not installed.  Aborting."; exit 1; }
done

apt install openssh-server -y
apt install docker-compose -y

systemctl start ssh || systemctl enable ssh
systemctl start docker || systemctl enable docker

cd infosec/labs/

for VARIABLE in  lowjava lowxss lowcommand middlejava middlexss middlecommand strongjava strongxss strongcommand
do
    cd $VARIABLE && docker build . -t $VARIABLE
    cd .. 
done


