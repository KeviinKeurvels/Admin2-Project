$ORIGIN l1-3.ephec-ti.be.
$TTL 86400      ; 1 day
@                       IN SOA  soa.l1-3.ephec-ti.be. he201962.students.ephec.be (20220322 21600 3600 604800 86400)


@                       IN NS   soa.l1-3.ephec-ti.be.


// a changer en fonction des IP privés des différents containers
mail            IN      A       10.0.2.16
resolver        IN      A       10.0.2.9
ns              IN	A	10.0.2.6
soa		IN	A	10.0.2.8
www             IN	A	10.0.2.36