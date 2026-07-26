CREATE DATABASE planeta;
USE planeta;


CREATE TABLE IF NOT EXISTS continente (
  codigo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(15) NOT NULL,
  PRIMARY KEY (codigo)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO continente (codigo, nombre) VALUES
(1, 'America'),
(2, 'Europa'),
(3, 'Africa'),
(4, 'Asia'),
(5, 'Oceania');



CREATE TABLE pais (
  codigo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(20) ,
  fecha_independencia date ,
  cod_cont int(11) ,
  PRIMARY KEY (codigo),
  KEY cod_cont (cod_cont)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;


INSERT INTO pais (codigo, nombre, fecha_independencia, cod_cont) VALUES
(1, 'Columbia', '2012-01-30', 1),
(2, 'Bolivia', '2013-01-04', 1),
(3, 'Venezuela', '0000-00-00', 1),
(4, 'Ecuador', '0000-00-00', 1),
(5, 'Peru', '0000-00-00', 1),
(6, 'Inglaterra', '0000-00-00', 2),
(7, 'Francia', '0000-00-00', 2),
(8, 'Italia', '0000-00-00', 2),
(9, 'España', '0000-00-00', 2),
(15, 'Egipto', '0000-00-00', 3),
(16, 'Libia', '0000-00-00', 3),
(17, 'Sudafrica', '0000-00-00', 3),
(18, 'Nigeria', '0000-00-00', 3),
(19, 'Marruecos', '0000-00-00', 3),
(20, 'China', '0000-00-00', 4),
(21, 'Japon', '0000-00-00', 4),
(22, 'India', '0000-00-00', 4),
(23, 'Korea del sur', '0000-00-00', 4),
(24, 'Korea del norte', '0000-00-00', 4),
(25, 'Alemania', '0000-00-00', 2),
(26, 'Brazil', '0000-00-00', 1),
(27, 'Canada', '0000-00-00', 1),
(28, 'Paraguay', '0000-00-00', 1),
(29, 'Libia', '2013-01-31', 3),
(30, 'Uruguay', '2013-01-01', 1),
(31, 'Australia', '2013-03-12', 5);


ALTER TABLE pais
  ADD CONSTRAINT pais_ibfk_1 FOREIGN KEY (cod_cont) REFERENCES continente (codigo) ON DELETE CASCADE ON UPDATE CASCADE;






CREATE TABLE IF NOT EXISTS estados (
  codigo_estado int(11) NOT NULL AUTO_INCREMENT,
  nombre_estado varchar(50) NOT NULL,
  cod_pais int(11) NOT NULL,
  PRIMARY KEY (codigo_estado),
  KEY cod_pais (cod_pais)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;



INSERT INTO estados (codigo_estado, nombre_estado, cod_pais) VALUES
(1, 'Valle del Cauca', 1),
(2, 'Cauca', 1),
(3, 'Antioquia', 1),
(4, 'Cundinamarca', 1);


ALTER TABLE estados
  ADD CONSTRAINT estados_ibfk_1 FOREIGN KEY (cod_pais) REFERENCES pais (codigo) ON DELETE CASCADE ON UPDATE CASCADE;


