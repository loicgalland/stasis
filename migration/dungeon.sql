CREATE TABLE dungeon (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(45) NOT NULL,
    level INT NOT NULL,
    ultim_boss TINYINT(0),
    dungeon_character_id INT NOT NULL FOREIGN KEY REFERENCES dungeon_character(id)
);