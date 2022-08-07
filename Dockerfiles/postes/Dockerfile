FROM ubuntu:latest

RUN apt update -y
RUN apt upgrade -y
RUN apt-get update
RUN apt-get upgrade

RUN apt-get install nano
RUN apt-get install smbclient -y --fix-missing
RUN apt install cifs-utils -y --fix-missing
RUN apt install net-tools
RUN apt install dnsutils -y
RUN apt-get install iputils-ping -y
RUN apt-get install mutt -y
RUN apt install links -y

RUN apt clean

CMD tail -f /dev/null

