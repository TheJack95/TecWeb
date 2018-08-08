CREATE TABLE IF NOT EXISTS Prenotazione(
  ID varchar(10) PRIMARY KEY,
  Nome varchar(30) NOT NULL,
  Cognome varchar(30) NOT NULL,
  Telefono varchar(13) DEFAULT NULL,
  Email varchar(50) NOT NULL,
  Messaggio text NOT NULL,
  Checkin DATE NOT NULL,
  Checkout DATE NOT NULL,
  BeB  varchar(40) NOT NULL
);

