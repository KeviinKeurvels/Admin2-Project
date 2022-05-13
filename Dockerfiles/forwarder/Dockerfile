FROM ubuntu/bind9:latest
EXPOSE 53/tcp
EXPOSE 53/udp
EXPOSE 953/tcp

RUN apt update -y
RUN apt upgrade -y
RUN apt-get update
RUN apt-get upgrade

RUN apt-get install nano
RUN apt install net-tools
RUN apt install dnsutils -y
RUN apt-get install iputils-ping -y

CMD tail -f /dev/null