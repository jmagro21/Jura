CREATE TABLE Reservation (
   ID_Client serial PRIMARY KEY,
   Date_Reservation DATE NOT NULL,
   ID_Hebergement VARCHAR(50) NOT NULL,
   Nom VARCHAR(30) NOT NULL,
   Prenom VARCHAR(30) NOT NULL,
   duree_sejour int NOT NULL,
   disponnibilite VARCHAR(10) NOT NULL,
   paiement VARHAR(10);)
