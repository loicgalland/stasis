CREATE TABLE dungeon_character (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    stasis INT NOT NULL DEFAULT 2,
    level_wanted INT NOT NULL,
    character_id_id INT NOT NULL FOREIGN KEY REFERENCES character(id)
);