FROM ubuntu
ENV DEBIAN_FRONTEND=noninteractive
RUN apt update -y
RUN apt upgrade -y

RUN apt install apache2 -y
RUN apt install apache2-utils -y
RUN apt clean

RUN apt-get install nano
RUN apt install net-tools
RUN apt install dnsutils
RUN apt-get install iputils-ping

EXPOSE 80 CMD [“apache2ctl”, “-D”, “FOREGROUND”]
