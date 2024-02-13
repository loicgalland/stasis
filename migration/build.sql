CREATE TABLE build (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(45) NOT NULL,
    url VARCHAR(255) NOT NULL,
    level INT NOT NULL,
    spell_code VARCHAR(45),
    comment CHAR(),
    character_id INT NOT NULL FOREIGN KEY REFERENCES character(id)
);