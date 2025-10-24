CREATE DATABASE tabelas;

USE tabelas;

CREATE TABLE produtos (
id INT AUTO_INCREMENT Primary key,
nome VARCHAR(100) NOT NULL,
preco DECIMAL(10, 2) NOT NULL,
estoque INT NOT NULL
);

INSERT INTO produtos (nome, preco, estoque) VALUES
('Notebook', 2500.00, 15),
('Mouse', 50.00, 30),
('Teclado', 120.00, 25);

CREATE TABLE vendas (
id INT AUTO_INCREMENT PRIMARY KEY,
trimestre VARCHAR(50) NOT NULL,
valor DECIMAL(10, 2) NOT NULL
);

INSERT INTO vendas (trimestre, valor) VALUES
('1* Trimestre', 50000.00),
('2* Trimestre', 65000.00);
