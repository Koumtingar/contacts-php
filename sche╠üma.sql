CREATE DATABASE carnetdb;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    pays VARCHAR(100),
    genre VARCHAR(30),
    email VARCHAR(100),
    telephone INT(11),
    dates DATE  
);