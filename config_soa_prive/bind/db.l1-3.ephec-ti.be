$ORIGIN l1-3.ephec-ti.be.
$TTL 86400      ; 1 day
@                       IN SOA  soa.l1-3.ephec-ti.be. he201962.students.ephec.be. (20220322 21600 3600 604800 86400)


@			NS   soa.l1-3.ephec-ti.be.
@			MX 10	 mail.l1-3.ephec-ti.be.


; a changer en fonction des IP privees des differents containers
forwarder	IN	A	172.19.0.4
mail		IN	A       172.19.0.10
resolver		IN	A       172.19.0.5
ns		IN	A	172.19.0.2
soa		IN	A       172.19.0.3
www		IN	A	51.68.70.199 ; mettre l'adresse publique
b2b		IN	A	51.68.70.199 ; mettre l'adresse publique
samba		IN	A	172.19.0.6

ordi1		IN	A	172.19.0.7
ordi2		IN	A	172.19.0.8
ordi3		IN	A	172.19.0.9