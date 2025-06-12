CREATE DATABASE site_receitas;
USE site_receitas;

CREATE TABLE receitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    imagem VARCHAR(255), -- Caminho da imagem
    ingredientes TEXT NOT NULL,
    preparo TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);