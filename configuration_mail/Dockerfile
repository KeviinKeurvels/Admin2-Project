FROM ubuntu:latest
RUN apt update -y
RUN apt upgrade -y
RUN apt install postfix mutt mailutils bsd-mailx  -y
RUN apt install dovecot-imapd dovecot-pop3d -y
RUN apt clean
