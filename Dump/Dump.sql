[21:42] BRUNO GIL RECHE
    
SQL
CREATE TABLE Usuario (
    id_usuario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_usuario)
);
CREATE TABLE Carro (
    id_carro INT NOT NULL AUTO_INCREMENT,
    placa VARCHAR(8) NOT NULL UNIQUE,
    modelo VARCHAR(50) NOT NULL,
    cor VARCHAR(20) NOT NULL,
    id_usuario INT NOT NULL,
    PRIMARY KEY (id_carro),
    FOREIGN KEY (id_usuario)
        REFERENCES Usuario(id_usuario)
);
CREATE TABLE EmpresaEstacionamento (
    id_empresa INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cnpj VARCHAR(14) NOT NULL UNIQUE,
    telefone VARCHAR(20),
    PRIMARY KEY (id_empresa)
);
CREATE TABLE Estacionamento (
    id_estacionamento INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    id_empresa INT NOT NULL,
    PRIMARY KEY (id_estacionamento),
    FOREIGN KEY (id_empresa)
        REFERENCES EmpresaEstacionamento(id_empresa)
);
CREATE TABLE Historico (
    id_historico INT NOT NULL AUTO_INCREMENT,
    data_hora_entrada DATETIME NOT NULL,
    data_hora_saida DATETIME,
    valor_pago DECIMAL(8, 2),
    id_carro INT NOT NULL,
    id_estacionamento INT NOT NULL,
    PRIMARY KEY (id_historico),
    FOREIGN KEY (id_carro)
        REFERENCES Carro(id_carro),
    FOREIGN KEY (id_estacionamento)
        REFERENCES Estacionamento(id_estacionamento)
);
CREATE TABLE EstacionamentoUsuario (
    id_estacionamento INT NOT NULL,
    id_usuario INT NOT NULL,
    PRIMARY KEY (id_estacionamento, id_usuario),
    FOREIGN KEY (id_estacionamento)
        REFERENCES Estacionamento(id_estacionamento),
    FOREIGN KEY (id_usuario)
        REFERENCES Usuario(id_usuario)
);