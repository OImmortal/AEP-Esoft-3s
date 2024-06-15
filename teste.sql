CREATE DATABASE if NOT EXISTS aep;
USE aep;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(64) NOT NULL,
senha TEXT NOT NULL );

SELECT * FROM users WHERE usuario = 'teste@teste.com';

INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');
INSERT INTO users (usuario, senha) VALUES ('joao', '123');

UPDATE users SET usuario = 'joao@email.com', senha = '123' WHERE id = 4;