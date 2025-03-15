CREATE TABLE Carros (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    ano INT
);

ALTER TABLE Carros ADD placa VARCHAR(7);

INSERT INTO Carros (id, nome, ano, placa) VALUES (1, 'BYD Song Pro', 2024, 'TYS2C47');

INSERT INTO Carros (id, nome, ano, placa) VALUES (2, 'Toyota Corolla', 2016, 'UYM1232');

