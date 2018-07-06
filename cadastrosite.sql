DROP TABLE IF EXISTS gp_usuarios;
DROP TABLE IF EXISTS profissionais;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE gp_usuarios (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE profissionais (
  codigo int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(40) NOT NULL,
  email varchar(50) NOT NULL,
  profissao varchar(20) NOT NULL,
  data_nacimento int(11) NOT NULL,
  rg varchar(15) NOT NULL,
  cidade varchar(20) NOT NULL,
  estado varchar(15) NOT NULL,
  descricao varchar(100) NOT NULL,
  telefone varchar(40) NOT NULL,
  whtasapp varchar(40) NOT NULL,
  bairro varchar(25) DEFAULT NULL,
  cep int(15) DEFAULT NULL,
  endereco varchar(30) DEFAULT NULL,
  nacionalidade varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE usuarios (
  codigo int(11)  AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nome varchar(40) NOT NULL,
  email varchar(50) NOT NULL,
  senha varchar(40) NOT NULL,
  sobrenome text NOT NULL,
  id_grupo int not null DEFAULT '2',
  FOREIGN KEY Fk_grupo(id_grupo) REFERENCES gp_usuarios(id) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO gp_usuarios (id, nome) VALUES
(1, 'Administrador'),
(2, 'Usuario');
