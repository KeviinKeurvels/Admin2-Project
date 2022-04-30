FROM ubuntu:latest
RUN apt update -y
RUN apt upgrade -y
RUN apt install postfix mutt mailutils bsd-mailx  -y
RUN apt install dovecot-imapd dovecot-pop3d -y
RUN apt clean
#Ports SMTP
#par defaut
EXPOSE 25
#le plus utilise
EXPOSE 587
#Pour SSL/TLS
EXPOSE 465

#Ports IMAP et POP
#POP par defaut
EXPOSE 110
#POP avec SSL/TLS
EXPOSE 995
#IMAP par defaut
EXPOSE 143
#IMAP avec SSL
EXPOSE 993
