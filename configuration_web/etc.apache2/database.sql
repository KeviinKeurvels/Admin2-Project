CREATE USER 'user'@'localhost' IDENTIFIED BY 'user';
CREATE USER 'user2'@'localhost' IDENTIFIED BY 'user2';

CREATE DATABASE b2bDatabase;
USE b2bDatabase;


CREATE TABLE PRODUCT (
  NPRO char(5) NOT NULL,
  NAME varchar(20) NOT NULL,
  PRICE decimal(5,0) NOT NULL,
  QUANTITY decimal(6,0) NOT NULL,
  PRIMARY KEY (NPRO) 
);

GRANT SELECT ON b2bDatabase.PRODUCT TO 'user'@'localhost';

GRANT INSERT ON b2bDatabase.PRODUCT TO 'user2'@'localhost';
REVOKE IF EXISTS SELECT ON b2bDatabase.PRODUCT FROM 'user2'@'localhost';


INSERT INTO  PRODUCT  VALUES (1,'obj1',12,32);
INSERT INTO  PRODUCT  VALUES (2,'obj2',2,30);
INSERT INTO  PRODUCT  VALUES (3,'obj3',9,10);
INSERT INTO  PRODUCT  VALUES (4,'obj4',11,24);
INSERT INTO  PRODUCT  VALUES (5,'obj5',7,18);
