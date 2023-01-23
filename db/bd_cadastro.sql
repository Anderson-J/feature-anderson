CREATE DATABASE bd_cadastro;

USE bd_cadastro;

CREATE TABLE cdt_cadastros
(
	cdt_id SERIAL PRIMARY KEY,
    cdt_nome VARCHAR(50) NOT NULL,
    cdt_cep INT(8) UNSIGNED NOT NULL,
    cdt_endereco VARCHAR(100) NOT NULL
)