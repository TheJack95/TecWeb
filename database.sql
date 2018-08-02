CREATE TABLE IF NOT EXISTS Contatto(
  ID int AUTO_INCREMENT PRIMARY KEY,
  Nome varchar(20) NOT NULL,
  Cognome varchar(20) NOT NULL,
  Telefono char(15),
  Email varchar(40) NOT NULL,
  Messaggio text NOT NULL
);

