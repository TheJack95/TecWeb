CREATE TABLE IF NOT EXISTS Utente (
  Login varchar(10) PRIMARY KEY,
  Password varchar(20)
);

CREATE TABLE IF NOT EXISTS BeB (
  Nome varchar(30) NOT NULL PRIMARY KEY,
  BeB varchar(50) NOT NULL,
  Telefono varchar(20) DEFAULT NULL,
  Indirizzo varchar(50) NOT NULL,
  Citta varchar(50) NOT NULL,
  Mappa varchar(2083) CHARACTER SET utf8 NOT NULL
);

CREATE TABLE IF NOT EXISTS Contatto (
  Id int AUTO_INCREMENT PRIMARY KEY,
  Nome varchar(30) NOT NULL,
  Cognome varchar(30) NOT NULL,
  Telefono varchar(13) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  Messaggio text NOT NULL
);

CREATE TABLE IF NOT EXISTS Prenotazione (
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



INSERT INTO Utente (Login, Password) VALUES ('admin','admin'),('user','user');

INSERT INTO BeB (Nome, BeB, Telefono, Indirizzo, Citta, Mappa)
VALUES ('alborgo','AlBorgo','+39 0000 000000','Via Ventolone, 4','435032 Arqu&agrave; Petrarca (PD)','https://goo.gl/maps/9VnRUVpRX7C2'),
('boscoverde','Boscoverde','+39 0000 000000','Via Visome, 211','32100 Belluno (BL)','https://goo.gl/maps/zkUznEEVUAo'),
('cadorehaus','CadoreHaus','+39 0000 000000','Via Saletta, 30','32041 Auronzo di Cadore (BL)','https://goo.gl/maps/RNhypTnWjv92'),
('lacorte','LaCorte','+39 0000 000000','Via Bassafonda, 46','45010 Rosolina (RO)','https://goo.gl/maps/R8aMwSJQsUs'),
('lastelladelviandante','StelladelViandante','+39 0000 000000','Via Danilo Busin, 7','32020 Falcade (BL)','https://goo.gl/maps/e6JwcoXmWN12');

INSERT INTO Contatto (Id, Nome, Cognome, Telefono, Email, Messaggio)
VALUES ('1','Giulia','Fiorese','0000000000','giulia.fiorese.1@studenti.unipd.it','ISCRIZIONE'),
('2','Giulia','Fiorese',NULL,'giulia.fiorese.1@studenti.unipd.it','Nelle vostre strutture accettate animali domestici? Grazie. Giulia');

INSERT INTO Prenotazione (Id, Username, Nome, Cognome, Telefono, Email, Messaggio, Checkin, Checkout, BeB, Persone)
VALUES ('1','user','Giulia','Fiorese','000 0000000','giulia.fiorese.1@studenti.unipd.it','PRENOTAZIONE','2019-02-21','2019-02-23','AlBorgo','2'),
('2','user','Giulia','Fiorese','000 0000000','giulia.fiorese.1@studenti.unipd.it','Vorrei prenotare due camere matrimoniali, se possibile. Grazie. Giulia','2019-03-01','2019-03-03','CadoreHaus','4');
