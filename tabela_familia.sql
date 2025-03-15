INSERT INTO Carros (id, nome, ano, placa) VALUES (2, 'Toyota Corolla', 2016, 'UYM1232');

SELECT * FROM Carros;

INSERT INTO Carros (id, nome, ano, placa) VALUES (3, 'Chevrolet Prisma', 2016, 'HGT6572');

CREATE TABLE familia (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    funcao VARCHAR(30),
    idade INT
);

INSERT INTO familia (id, nome, funcao, idade) VALUES ('Julius', 'Pai', 51);
INSERT INTO familia (id, nome, funcao, idade) VALUES (2, 'Rochele', 'Mãe', 51);
INSERT INTO familia (id, nome, funcao, idade) VALUES 
    (3, 'Chris', 'Filho mais velho', 19),
    (4, 'Drew', 'Filho do meio,', 11),
    (5, 'Tônia', 'Filha mais nova', 10);

DROP TABLE familia;

DELETE FROM familia
WHERE id = 4

INSERT INTO familia (id, nome, funcao, idade) VALUES (4, 'Drew', 'Filho do meio', 11);

UPDATE Carros
SET nome = 'GWM Haval H6'
WHERE nome = 'BYD Song Pro';