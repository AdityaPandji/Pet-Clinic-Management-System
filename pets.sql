CREATE DATABASE pet_clinic;
USE pet_clinic;
CREATE TABLE pets(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    species VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    owner VARCHAR(100) NOT NULL
);
INSERT INTO pets (name, species, age, owner) VALUES
('Tommy','Dog',3,'John Doe'),
('Mittens','Cat',2,'Sarah Lee'),
('Buddy','Parrot',1,'Amit Kumar');