$ORIGIN l1-3.ephec-ti.be.
$TTL 86400      ; 1 day
@                       IN SOA  soa.l1-3.ephec-ti.be. he201962.students.ephec.be. (20220322 21600 3600 604800 86400)


@			NS   soa.l1-3.ephec-ti.be.
@			MX 10 mail.l1-3.ephec-ti.be.


; a changer en fonction des IP privees des differents containers
mail		IN	A       10.0.2.16
resolver		IN	A       10.0.2.9
ns		IN	A	10.0.2.10
;soa		IN	A	10.0.2.8
soa		IN	A       172.18.0.3
www		IN	A	10.0.2.36
test		IN	A	10.0.2.22