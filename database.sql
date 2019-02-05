CREATE TABLE if NOT EXISTS  Utente(
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

INSERT INTO Utente (Login, Password) VALUES ('admin','admin'), ('user','user'), ('user1','user1');
