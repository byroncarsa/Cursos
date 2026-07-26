
CREATE DATABASE certificadev;
USE certificadev;

CREATE TABLE LOGIN (
id     		INTEGER(5) NOT NULL,
user   		VARCHAR(25),
password 	VARCHAR(25),
email 		VARCHAR(25),
pasadmin	VARCHAR(25),
rol         INTEGER(2),
PRIMARY KEY (id)
);


INSERT INTO `login` VALUES(1, 'Administrador', '', 'byr.garrido@gmail.com', 'byron', 1);
INSERT INTO `login` VALUES(2, 'Administrador', '', 'jav.astorga@alumnos.duoc.com', 'javier', 1);
INSERT INTO `login` VALUES(3, 'Joseph', '12345', 'josephg059@gmail.com', '', 2);
INSERT INTO `login` VALUES(4, 'paul', '123', 'paul@gmail.com', '', 2);


ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
  
CREATE TABLE COMUNA (
COM_ID INTEGER(11) NOT NULL, 
COM_NOM VARCHAR(50) NOT NULL,
PRIMARY KEY (COM_ID)
);

INSERT INTO COMUNA VALUES

(13101,'Santiago'),
(13102,'Cerrillos'),
(13103,'Cerro Navia'),
(13104,'Conchalí'),
(13105,'El Bosque'),
(13106,'Estación Central'),
(13107,'Huechuraba'),
(13108,'Independencia'),
(13109,'La Cisterna'),
(13110,'La Florida'),
(13111,'La Granja'),
(13112,'La Pintana'),
(13113,'La Reina'),
(13114,'Las Condes'),
(13115,'Lo Barnechea'),
(13116,'Lo Espejo'),
(13117,'Lo Prado'),
(13118,'Macul'),
(13119,'Maipú'),
(13120,'Ñuñoa'),
(13121,'Pedro Aguirre Cerda'),
(13122,'Peñalolén'),
(13123,'Providencia'),
(13124,'Pudahuel'),
(13125,'Quilicura'),
(13126,'Quinta Normal'),
(13127,'Recoleta'),
(13128,'Renca'),
(13129,'San Joaquín'),
(13130,'San Miguel'),
(13131,'San Ramón'),
(13132,'Vitacura'),
(13201,'Puente Alto'),
(13202,'Pirque'),
(13203,'San José de Maipo'),
(13301,'Colina'),
(13302,'Lampa'),
(13303,'Tiltil'),
(13401,'San Bernardo'),
(13402,'Buin'),
(13403,'Calera de Tango'),
(13404,'Paine'),
(13501,'Melipilla'),
(13502,'Alhué'),
(13503,'Curacaví'),
(13504,'María Pinto'),
(13505,'San Pedro'),
(13601,'Talagante'),
(13602,'El Monte'),
(13603,'Isla de Maipo'),
(13604,'Padre Hurtado'),
(13605,'Peñaflor');


CREATE TABLE MODALIDAD( 
ID_MODALIDAD 	INTEGER(1) NOT NULL ,
MODALIDAD   	VARCHAR(10),	
PRIMARY KEY (ID_MODALIDAD) 
);


INSERT INTO MODALIDAD VALUES(1,'Diurna');
INSERT INTO MODALIDAD VALUES(2,'Vespertino');



CREATE TABLE CURSO ( 
ID_CURSO   INTEGER(1)  NOT NULL , 
CURSO      VARCHAR(20), 
PRIMARY KEY(ID_CURSO)
);


INSERT INTO CURSO VALUES(1,'Java');
INSERT INTO CURSO VALUES(2,'.NET');
INSERT INTO CURSO VALUES(3,'PHP');



CREATE TABLE EDUCACION ( 
ID_EDUCACION   INTEGER(1)  NOT NULL ,  
EDUCACION      VARCHAR(20),
PRIMARY KEY(ID_EDUCACION)
);


INSERT INTO EDUCACION VALUES(1,'Profesional');
INSERT INTO EDUCACION VALUES(2,'Tecnico');
INSERT INTO EDUCACION VALUES(3,'Media');
INSERT INTO EDUCACION VALUES(4,'Basica');
INSERT INTO EDUCACION VALUES(5,'No Posee');


CREATE TABLE SOLICITUD(
ID_SOLICITUD INTEGER(1), 
SOLICITUD  VARCHAR(10), 
PRIMARY KEY (ID_SOLICITUD)
);

INSERT INTO SOLICITUD VALUES(1,'Pendiente');
INSERT INTO SOLICITUD VALUES(2,'Aprobado');
INSERT INTO SOLICITUD VALUES(3,'Rechazado');


CREATE TABLE POSTULACION (
PO_ID                        INT(5) NOT NULL,
PO_RUT                       INT(8),
PO_VERIFICADOR               VARCHAR(1),
PO_NOMBRE		             VARCHAR(20),
PO_PATERNO        	         VARCHAR(20),
PO_MATERNO                   VARCHAR(20),
PO_SEXO                      VARCHAR(20),
PO_FECHA_NACIMIENTO          VARCHAR(20),
PO_TELEFONO                  INT(9),
PO_EMAIL			         VARCHAR(20),
PO_DIRECCION                 VARCHAR(20),
PO_COM_ID		             INTEGER(1),
PO_ID_EDUCACION        	     INTEGER(1),
PO_EXPERIENCIA               VARCHAR(2),
PO_AÑOS                   	 VARCHAR(3),
PO_ID_MODALIDAD              INTEGER(1),
PO_ID_CURSO                  INTEGER(1),
PO_ID_SOLICITUD                  INTEGER(1),
PRIMARY KEY(PO_ID),
FOREIGN KEY (PO_COM_ID) REFERENCES COMUNA(COM_ID),
FOREIGN KEY (PO_ID_EDUCACION) REFERENCES EDUCACION(ID_EDUCACION),
FOREIGN KEY (PO_ID_MODALIDAD) REFERENCES MODALIDAD(ID_MODALIDAD),
FOREIGN KEY (PO_ID_CURSO) REFERENCES CURSO(ID_CURSO)
);

ALTER TABLE POSTULACION
MODIFY PO_ID INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

INSERT INTO POSTULACION VALUES(1,18976649,1,'BYRON','GARRIDO','SEPULVEDA','13/08/1994','Masculino',951163608,'byr.garrido@gmail','puerto grosse',13101,1,'si',2,1,1,1);
