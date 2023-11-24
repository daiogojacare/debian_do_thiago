CREATE TABLE usuarios (
    id_usuarios INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel_acesso ENUM('adm', 'usuario') NOT NULL
);

INSERT INTO usuarios (nome, email, senha, nivel_acesso)
VALUES ('admin', 'admin@gmail.com', '123123', 'adm');