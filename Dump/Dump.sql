CREATE DATABASE estacionamento_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE estacionamento_db;

CREATE TABLE Usuario (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  sexo CHAR(1) NOT NULL,
  telefone VARCHAR(20) NULL,
  administrador BOOLEAN NOT NULL,
  PRIMARY KEY (id_usuario)
);

CREATE TABLE Carro (
  id_carro INT NOT NULL AUTO_INCREMENT,
  marca VARCHAR(50) NOT NULL,
  modelo VARCHAR(50) NOT NULL,
  placa VARCHAR(7) NOT NULL,
  eletrico BOOLEAN NOT NULL,
  id_usuario INT NOT NULL,
  PRIMARY KEY (id_carro),
  FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE EmpresaEstacionamento (
  id_empresa INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  endereco VARCHAR(200) NOT NULL,
  cep VARCHAR(9) NOT NULL,
  estado VARCHAR(50) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  bairro VARCHAR(100) NOT NULL,
  cnpj VARCHAR(18) NOT NULL,
  telefone VARCHAR(20) NULL,
  PRIMARY KEY (id_empresa)
);

CREATE TABLE Estacionamento (
  id_estacionamento INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  endereco VARCHAR(200) NOT NULL,
  cep VARCHAR(9) NOT NULL,
  estado VARCHAR(50) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  bairro VARCHAR(100) NOT NULL,
  horario_funcionamento_inicio DATETIME NOT NULL,
  horario_funcionamento_fim DATETIME NOT NULL,
  id_empresa INT NOT NULL,
  telefone VARCHAR(20) NULL,
  PRIMARY KEY (id_estacionamento),
  FOREIGN KEY (id_empresa) REFERENCES EmpresaEstacionamento(id_empresa)
);

CREATE TABLE Comentario (
  id_comentario INT NOT NULL AUTO_INCREMENT,
  texto VARCHAR(500) NOT NULL,
  data_comentario DATE NOT NULL,
  id_usuario INT NOT NULL,
  id_estacionamento INT NOT NULL,
  PRIMARY KEY (id_comentario),
  FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
  FOREIGN KEY (id_estacionamento) REFERENCES Estacionamento(id_estacionamento)
);

CREATE TABLE Reserva (
  id_reserva INT NOT NULL AUTO_INCREMENT,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  preco DECIMAL(10, 2) NOT NULL,
  id_usuario INT NOT NULL,
  id_estacionamento INT NOT NULL,
  id_carro INT NOT NULL,
  PRIMARY KEY (id_reserva),
  FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
  FOREIGN KEY (id_estacionamento) REFERENCES Estacionamento(id_estacionamento),
  FOREIGN KEY (id_carro) REFERENCES Carro(id_carro)
);

CREATE TABLE Administrador (
  id_administrador INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  PRIMARY KEY(id_administrador)
);