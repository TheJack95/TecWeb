CREATE TABLE if NOT EXISTS  Cliente(
  Login varchar(10) PRIMARY KEY,
  Password varchar(20),
  FOREIGN KEY (Login) references Prenotazione(Username) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS Prenotazione(
  Username varchar(10) PRIMARY KEY, -- ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nome varchar(30) NOT NULL,
  Cognome varchar(30) NOT NULL,
  Telefono varchar(13) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  Messaggio text NOT NULL,
  Checkin DATE NOT NULL,
  Checkout DATE NOT NULL,
  BeB  varchar(40) NOT NULL,
  Persone int NOT NULL,
  FOREIGN KEY (ID) references Cliente(ID) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE IF NOT EXISTS Contatto (
  ID varchar(10) PRIMARY KEY, -- ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Nome varchar(30) NOT NULL,
  Cognome varchar(30) NOT NULL,
  Telefono varchar(13) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  Messaggio text NOT NULL
  );
-- se id è auto_increment il valore da inserire è NULL
