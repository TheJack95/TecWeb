CREATE TABLE IF NOT EXISTS Utente(
  Login varchar(10) PRIMARY KEY,
  Password varchar(20)
);

CREATE TABLE IF NOT EXISTS Prenotazione(
  Id int AUTO_INCREMENT PRIMARY KEY,
  Username varchar(10) NOT NULL,
  Nome varchar(30) NOT NULL,
  Cognome varchar(30) NOT NULL,
  Telefono varchar(13) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  Messaggio text NOT NULL,
  Checkin DATE NOT NULL,
  Checkout DATE NOT NULL,
  BeB varchar(40) NOT NULL,
  Persone int NOT NULL,
  FOREIGN KEY (Username) references Utente(Login) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS Contatto(
  Id int(11) AUTO_INCREMENT,
  Nome varchar(30) NOT NULL,
  Cognome varchar(30) NOT NULL,
  Telefono varchar(13) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  Messaggio text NOT NULL,
  PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS BeB(
  Nome varchar(30) NOT NULL,
  BeB varchar(50) NOT NULL,
  Telefono varchar(20) DEFAULT NULL,
  Indirizzo varchar(50) NOT NULL,
  Citta varchar(50) NOT NULL,
  Mappa varchar(2083) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (Nome)
);


INSERT INTO Utente (Login, Password) VALUES ('admin','admin'), ('user','user');

INSERT INTO BeB VALUES ('alborgo','AlBorgo','+39 0000 000000','Via Ventolone, 4','435032 Arqu&agrave; Petrarca (PD)','https://goo.gl/maps/9VnRUVpRX7C2'),('boscoverde','Boscoverde','+39 0000 000000','Via Visome, 211','32100 Belluno (BL)','https://goo.gl/maps/zkUznEEVUAo'),('cadorehaus','CadoreHaus','+39 0000 000000','Via Saletta, 30','32041 Auronzo di Cadore (BL)','https://goo.gl/maps/RNhypTnWjv92'),('lacorte','LaCorte','+39 0000 000000','Via Bassafonda, 46','45010 Rosolina (RO)','https://goo.gl/maps/R8aMwSJQsUs'),('lastelladelviandante','StelladelViandante','+39 0000 000000','Via Danilo Busin, 7','32020 Falcade (BL)','https://goo.gl/maps/e6JwcoXmWN12');
