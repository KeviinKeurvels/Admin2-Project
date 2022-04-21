FROM ubuntu/bind9:latest
EXPOSE 53/tcp
EXPOSE 53/udp
RUN apt update -y

RUN apt upgrade -y

RUN apt-get install nano
RUN apt install net-tools
RUN apt install dnsutils
RUN apt-get install iputils-ping

CMD tail -f /dev/null

