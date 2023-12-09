CREATE DATABASE IF NOT EXISTS database1;
USE your_database;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    phoneNumber VARCHAR(15),
    email VARCHAR(50),
    password VARCHAR(50),
    idNumber VARCHAR(20),
    kraPin VARCHAR(20),
    city VARCHAR(50),
    country VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `table1`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `table1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
