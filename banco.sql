CREATE DATABASE IF NOT EXISTS SiteNoticias;
USE SiteNoticias;
-- DROP DATABASE SiteNoticias;

CREATE TABLE tb_login(
id_login					INT NOT NULL AUTO_INCREMENT,
usuario					VARCHAR(255) NOT NULL,
senha						VARCHAR(255) NOT NULL,
PRIMARY KEY (id_login)
);
INSERT INTO tb_login (usuario,senha) VALUES
('admin','123');
SELECT * FROM tb_login;

CREATE TABLE tb_noticia (
id_noticia				INT NOT NULL AUTO_INCREMENT,
titulo					VARCHAR(255) NOT NULL,
noticia					TEXT NOT NULL,
datahora					TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
imagem					VARCHAR(255),
fonte						VARCHAR(255),
autor						VARCHAR(255),
PRIMARY KEY	(id_noticia)
);
INSERT INTO tb_noticia (titulo,noticia,imagem,fonte,autor) VALUES 
('Primeira noticia','Criando um site de noticia1','exemplo.jpg','Etec Pinhal','Jorge'),
('Segundo noticia','Criando um site de noticia2','exemplo.jpg','Etec Pinhal','Jorge'),
('Terceira noticia','Criando um site de noticia3','exemplo.jpg','Etec Pinhal','Jorge'),
('Quarta noticia','Criando um site de noticia4','exemplo.jpg','Etec Pinhal','Jorge'),
('Quinta noticia','Criando um site de noticia5','exemplo.jpg','Etec Pinhal','Jorge'),
('Sexta noticia','Criando um site de noticia6','exemplo.jpg','Etec Pinhal','Jorge'),
('Setima noticia','Criando um site de noticia7','exemplo.jpg','Etec Pinhal','Jorge');
SELECT * FROM tb_noticia;
SELECT * FROM tb_noticia ORDER BY RAND() LIMIT 6;