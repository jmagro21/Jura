CREATE TABLE Reservation (
   ID_Client serial PRIMARY KEY,
   Date_Reservation DATE NOT NULL,
   ID_Hebergement VARCHAR(50) NOT NULL,
   Nom VARCHAR(30) NOT NULL,
   Prenom VARCHAR(30) NOT NULL,
   duree_sejour int NOT NULL,
   disponnibilite VARCHAR(10) NOT NULL,
   paiement VARCHAR(10);)


CREATE TABLE Authentification(
   ID_Client VARCHAR(50),
   Nom VARCHAR(50),
   Numero BIGINT,
   Prenom VARCHAR(50),
   Email VARCHAR(50),
   PRIMARY KEY(ID_Client));


CREATE TABLE Hebergement (
   ID_Hebergement serial PRIMARY KEY,
   Douche int NOT NULL,
   Toilette int NOT NULL,
   nombre_lits int NOT NULL,
   Hebergement_lieu VARCHAR(255) NOT NULL,
   balcon int NOT NULL,
   lits_double int NOT NULL,
   list_separes int NOT NULL,
   cloisons int NOT NULL,
   logement_handicape int NOT NULL);
