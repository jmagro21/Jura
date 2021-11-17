CREATE TABLE Reservation (
   ID_Client serial PRIMARY KEY NOT NULL,
   FOREIGN KEY(ID_Client) REFERENCES Athentification(ID_Client),
   FOREIGN KEY(ID_Client) REFERENCES Hebergement(ID_Hebergement),
   Date_Reservation DATE NOT NULL,
   ID_Hebergement VARCHAR(50) NOT NULL,
   Nom VARCHAR(30) NOT NULL,
   Prenom VARCHAR(30) NOT NULL,
   duree_sejour int NOT NULL,
   disponnibilite VARCHAR(10) NOT NULL,
   paiement VARCHAR(10)
   ); 


CREATE TABLE Authentification(
   ID_Client serial PRIMARY KEY NOT NULL AUTO_INCREMENT,
   Nom VARCHAR(50),
   Numero int NOT NULL,
   Prenom VARCHAR(50) NOT NULL,
   Email VARCHAR(50) NOT NULL,
   mot_de_passe VARCHAR(30) NOT NULL,
   num_de_telephone int
   );


CREATE TABLE Hebergement (
   ID_Hebergement serial PRIMARY KEY NOT NULL,
   Douche int NOT NULL,
   Toilette int NOT NULL,
   nombre_lits int NOT NULL,
   Hebergement_lieu VARCHAR(255) NOT NULL,
   balcon int NOT NULL,
   lits_double int NOT NULL,
   list_separes int NOT NULL,
   cloisons int NOT NULL,
   logement_handicape int NOT NULL
);

INSERT INTO Authentification (Email,Nom,num_de_telephone,mot_de_passe,Prenom,Numero)
VALUES
  ('vitae.risus@google.org','Ford',1-156-786-5456,'Wendy',556),
  ('eu@protonmail.net','Lopez',914-5247,'Sandra',421),
  ('tincidunt.neque.vitae@protonmail.edu','Mccullough',313-0881,'Deborah',999),
  ('arcu@protonmail.ca','Todd',1-446-228-3387,'Kelly',422),
  ('id.libero@icloud.com','Vance',335-8230,'Jerome',845);
