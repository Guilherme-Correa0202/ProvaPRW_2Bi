DROP DATABASE IF EXISTS Prova2;


CREATE DATABASE IF NOT EXISTS Prova2;

USE Prova2;

CREATE TABLE fluxo_caixa (
    idFluxo INT PRIMARY KEY AUTO_INCREMENT,
    data date not null,
    tipo varchar(10) not null, 
    valor decimal(10,2) not null,
    historico varchar(150) not null,
    cheque varchar(3) not null
);
 
CREATE TABLE Pessoa (
    idPessoa INT PRIMARY KEY AUTO_INCREMENT,
    nomePessoa VARCHAR(100),
    email VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cep VARCHAR(100),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES Cidade(idCidade)
);



