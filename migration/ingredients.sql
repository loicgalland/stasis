CREATE TABLE ingredient (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(45) NOT NULL,
    special_craft_id INT NOT NULL FOREIGN KEY REFERENCES special_craft(id)
);