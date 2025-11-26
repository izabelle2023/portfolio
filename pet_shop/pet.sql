-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS pet;
USE pet;

-- Criar tabela agenda
CREATE TABLE IF NOT EXISTS agenda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    celular VARCHAR(20) NOT NULL,
    telefone VARCHAR(20),
    nome_pet VARCHAR(100) NOT NULL,
    idade INT,
    dtnasc DATE,
    raca VARCHAR(50),
    servicos VARCHAR(255),
    localidade VARCHAR(255),
    data_servico DATE,
    hora_servico TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE agenda MODIFY dtnasc DATE NOT NULL;

-- Criar tabela de usuários para login e cadastro
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(100) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (nome, email, senha)
VALUES ('Izabelle', 'iza@email.com', '1234');

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    imagem VARCHAR(255),
    categoria ENUM('Cachorro', 'Gato') NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produtos (nome, descricao, preco, imagem, categoria) VALUES
('Ração Premium', 'Ração para cães adultos sabor frango.', 89.90, 'images/racao.jpg', 'Cachorro'),
('Brinquedo Mordedor', 'Brinquedo resistente para cães.', 29.90, 'images/brinquedo.jpg', 'Cachorro'),
('Areia Higiênica', 'Areia para gatos com controle de odor.', 24.50, 'images/areia.jpg', 'Gato'),
('Arranhador Luxo', 'Arranhador para gatos com base de pelúcia.', 119.90, 'images/arranhador.jpg', 'Gato');

SELECT * FROM pet.produtos;

DELETE FROM produtos
WHERE id IN (1, 2, 3, 4);

SELECT * FROM pet.produtos;

INSERT INTO produtos (nome, descricao, preco, imagem) VALUES
-- Brinquedos
('Brinquedo Mordedor 1', 'Diversão garantida para seu pet', 19.90, 'brinq1.jpg'),
('Brinquedo Mordedor 2', 'Estimula o raciocínio do animal', 22.90, 'brinq2.jpg'),
('Brinquedo Mordedor 3', 'Colorido e resistente', 24.90, 'brinq3.jpg'),
('Brinquedo Mordedor 4', 'Feito com material atóxico', 21.90, 'brinq4.jpg'),
('Brinquedo Mordedor 5', 'Ideal para roer e brincar', 18.90, 'brinq5.jpg'),
('Brinquedo Mordedor 6', 'Ajuda no desenvolvimento motor', 23.90, 'brinq6.jpg'),
('Brinquedo Mordedor 7', 'Formato divertido e seguro', 20.90, 'brinq7.jpg'),
('Brinquedo Mordedor 8', 'Para pets de todos os tamanhos', 25.90, 'brinq8.jpg'),

-- Camas e conforto
('Caminha 1', 'Conforto para o descanso do pet', 89.90, 'caminha1.jpg'),
('Caminha 2', 'Tecido antialérgico e lavável', 94.90, 'caminha2.jpg'),
('Caminha 3', 'Design moderno e acolchoado', 99.90, 'caminha3.jpg'),
('Caminha 4', 'Ideal para ambientes internos', 84.90, 'caminha4.jpg'),
('Caminha 5', 'Base antiderrapante', 92.90, 'caminha5.jpg'),
('Caminha 6', 'Alta durabilidade', 96.90, 'caminha6.jpg'),

-- Gaiolas
('Gaiola 1', 'Gaiola para pequenos animais', 119.90, 'gai1.jpg'),
('Gaiola 2', 'Comedouro e bebedouro inclusos', 129.90, 'gai2.jpg'),
('Gaiola 3', 'Estrutura reforçada', 139.90, 'gai3.jpg'),
('Gaiola 4', 'Ideal para transporte', 109.90, 'gai4.jpg'),
('Gaiola 5', 'Porta com trava de segurança', 124.90, 'gai5.jpg'),
('Gaiola 6', 'Fácil de limpar', 134.90, 'gai6.jpg'),
('Gaiola 7', 'Design compacto', 114.90, 'gai7.jpg'),
('Gaiola 8', 'Design duplo', 125.90, 'gai8.jpg'),

-- Grades de proteção
('Grade 1', 'Grade de proteção para pets', 59.90, 'grade1.jpg'),
('Grade 2', 'Instalação simples e segura', 64.90, 'grade2.jpg'),
('Grade 3', 'Grade de proteção para pets', 59.90, 'grade3.jpg'),
('Grade 4', 'Instalação simples e segura', 64.90, 'grade4.jpg'),
('Grade 5', 'Grade de proteção para pets', 59.90, 'grade5.jpg'),
('Grade 6', 'Instalação simples e segura', 64.90, 'grade6.jpg'),
('Grade 7', 'Grade de proteção para pets', 59.90, 'grade7.jpg'),
('Grade 8', 'Instalação simples e segura', 64.90, 'grade8.jpg');

-- Ração
INSERT INTO produtos (nome, descricao, preco, imagem) VALUES
('Racao 1', 'Delicioso para o nosso pet', 64.90, 'racao (1).png'),
('Racao 2', 'Ração premium com ingredientes naturais', 72.90, 'racao (2).png'),
('Racao 3', 'Ideal para cães adultos com alta energia', 69.90, 'racao (3).png'),
('Racao 4', 'Fórmula balanceada para gatos exigentes', 74.90, 'racao (4).png'),
('Racao 5', 'Ração com ômega 3 e 6 para pelagem saudável', 79.90, 'racao (5).png'),
('Racao 6', 'Sabor carne com vegetais, enriquecida com vitaminas', 68.90, 'racao (6).png'),
('Racao 7', 'Ração para filhotes com fórmula especial de crescimento', 59.90, 'racao (7).png'),
('Racao 8', 'Ração hipoalergênica para pets sensíveis', 84.90, 'racao (8).png'),
('Racao 9', 'Ração econômica com alto valor nutricional', 54.90, 'racao (9).png');

INSERT INTO produtos (nome, descricao, preco, imagem) VALUES
('Racao Gato 1', 'Ração premium para gatos adultos sabor salmão', 74.90, 'racao_gato (1).jpg'),
('Racao Gato 2', 'Fórmula balanceada com taurina e ômega 3', 69.90, 'racao_gato (2).jpeg'),
('Racao Gato 3', 'Ração para gatos castrados com controle de peso', 72.90, 'racao_gato (3).jpeg'),
('Racao Gato 4', 'Sabor frango com arroz, ideal para digestão sensível', 68.90, 'racao_gato (4).jpeg'),
('Racao Gato 5', 'Ração natural sem corantes e conservantes', 79.90, 'racao_gato (5).jpeg'),
('Racao Gato 6', 'Ração para filhotes com fórmula de crescimento saudável', 64.90, 'racao_gato (6).jpeg'),
('Racao Gato 7', 'Ração hipoalergênica para gatos exigentes', 84.90, 'racao_gato (7).jpeg');

SELECT * FROM pet.produtos;


CREATE TABLE carrinho (
  id INT AUTO_INCREMENT PRIMARY KEY,
  produto_id INT,
  quantidade INT,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

ALTER TABLE produtos
  ADD COLUMN descricao TEXT,
  ADD COLUMN preco DECIMAL(10,2),
  ADD COLUMN imagem VARCHAR(100),
  ADD COLUMN categoria ENUM('Cachorro', 'Gato'),
  ADD COLUMN estoque INT DEFAULT 0,
  ADD COLUMN data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP;
  
  ALTER TABLE produtos
	ADD COLUMN estoque INT DEFAULT 0;
    
SHOW COLUMNS FROM produtos LIKE 'estoque';
ALTER TABLE produtos ADD COLUMN estoque INT DEFAULT 0;
ALTER TABLE produtos ADD COLUMN estoque INT DEFAULT 0;

-- Verifica se a coluna 'estoque' já existe
SET @colunaExiste := (
  SELECT COUNT(*) 
  FROM INFORMATION_SCHEMA.COLUMNS 
  WHERE TABLE_NAME = 'produtos' 
    AND COLUMN_NAME = 'estoque' 
    AND TABLE_SCHEMA = DATABASE()
);

-- Se não existir, adiciona a coluna
SET @sql := IF(@colunaExiste = 0, 
  'ALTER TABLE produtos ADD COLUMN estoque INT DEFAULT 0;', 
  'SELECT "A coluna estoque já existe." AS mensagem;'
);

-- Executa o comando apropriado
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

DELETE FROM produtos WHERE id > 0;

INSERT INTO produtos (id, nome, descricao, preco, imagem, categoria, criado_em, estoque) VALUES
(1, 'Brinquedo Mordedor 1', 'Diversão garantida para seu pet', 19.90, 'brinq1.jpg', 'cachorro', NOW(), 100),
(2, 'Brinquedo Mordedor 2', 'Estimula o raciocínio do animal', 22.90, 'brinq2.jpg', 'cachorro', NOW(), 100),
(3, 'Brinquedo Mordedor 3', 'Colorido e resistente', 24.90, 'brinq3.jpg', 'cachorro', NOW(), 100),
(4, 'Brinquedo Mordedor 4', 'Feito com material atóxico', 21.90, 'brinq4.jpg', 'cachorro', NOW(), 100),
(5, 'Brinquedo Mordedor 5', 'Ideal para roer e brincar', 18.90, 'brinq5.jpg', 'cachorro', NOW(), 100),
(6, 'Brinquedo Mordedor 6', 'Ajuda no desenvolvimento motor', 23.90, 'brinq6.jpg', 'cachorro', NOW(), 100),
(7, 'Brinquedo Mordedor 7', 'Formato divertido e seguro', 20.90, 'brinq7.jpg', 'cachorro', NOW(), 100),
(8, 'Brinquedo Mordedor 8', 'Para pets de todos os tamanhos', 25.90, 'brinq8.jpg', 'cachorro', NOW(), 100),
(9, 'Caminha 1', 'Conforto para o descanso do pet', 89.90, 'caminha1.jpg', 'cachorro', NOW(), 50),
(10, 'Caminha 2', 'Tecido antialérgico e lavável', 94.90, 'caminha2.jpg', 'cachorro', NOW(), 50),
(11, 'Caminha 3', 'Design moderno e acolchoado', 99.90, 'caminha3.jpg', 'cachorro', NOW(), 50),
(12, 'Caminha 4', 'Ideal para ambientes internos', 84.90, 'caminha4.jpg', 'cachorro', NOW(), 50),
(13, 'Caminha 5', 'Base antiderrapante', 92.90, 'caminha5.jpg', 'cachorro', NOW(), 50),
(14, 'Caminha 6', 'Alta durabilidade', 96.90, 'caminha6.jpg', 'cachorro', NOW(), 50),
(15, 'Gaiola 1', 'Gaiola para pequenos animais', 119.90, 'gai1.jpg', 'gato', NOW(), 30),
(16, 'Gaiola 2', 'Comedouro e bebedouro inclusos', 129.90, 'gai2.jpg', 'gato', NOW(), 30),
(17, 'Gaiola 3', 'Estrutura reforçada', 139.90, 'gai3.jpg', 'gato', NOW(), 30),
(18, 'Gaiola 4', 'Ideal para transporte', 109.90, 'gai4.jpg', 'gato', NOW(), 30),
(19, 'Gaiola 5', 'Porta com trava de segurança', 124.90, 'gai5.jpg', 'gato', NOW(), 30),
(20, 'Gaiola 6', 'Fácil de limpar', 134.90, 'gai6.jpg', 'gato', NOW(), 30),
(21, 'Gaiola 7', 'Design compacto', 114.90, 'gai7.jpg', 'gato', NOW(), 30),
(22, 'Gaiola 8', 'Design duplo', 125.90, 'gai8.jpg', 'gato', NOW(), 30),
(23, 'Grade 1', 'Grade de proteção para pets', 59.90, 'grade1.jpg', 'cachorro', NOW(), 40),
(24, 'Grade 2', 'Instalação simples e segura', 64.90, 'grade2.jpg', 'cachorro', NOW(), 40),
(25, 'Grade 3', 'Grade de proteção para pets', 59.90, 'grade3.jpg', 'cachorro', NOW(), 40),
(26, 'Grade 4', 'Instalação simples e segura', 64.90, 'grade4.jpg', 'cachorro', NOW(), 40),
(27, 'Grade 5', 'Grade de proteção para pets', 59.90, 'grade5.jpg', 'cachorro', NOW(), 40),
(28, 'Grade 6', 'Instalação simples e segura', 64.90, 'grade6.jpg', 'cachorro', NOW(), 40),
(29, 'Grade 7', 'Grade de proteção para pets', 59.90, 'grade7.jpg', 'cachorro', NOW(), 40),
(30, 'Grade 8', 'Instalação simples e segura', 64.90, 'grade8.jpg', 'cachorro', NOW(), 40),
(31, 'Racao 1', 'Delicioso para o nosso pet', 64.90, 'racao_1.png', 'cachorro', NOW(), 80),
(32, 'Racao 2', 'Ração premium com ingredientes naturais', 72.90, 'racao_2.png', 'cachorro', NOW(), 80),
(33, 'Racao 3', 'Ideal para cães adultos com alta energia', 69.90, 'racao_3.png', 'cachorro', NOW(), 80),
(34, 'Racao 4', 'Fórmula balanceada para gatos exigentes', 74.90, 'racao_4.png', 'gato', NOW(), 80),
(35, 'Racao 5', 'Ração com ômega 3 e 6 para pelagem saudável', 79.90, 'racao_5.png', 'cachorro', NOW(), 80),
(36, 'Racao 6', 'Sabor carne com vegetais, enriquecida com vitaminas', 68.90, 'racao_6.png', 'cachorro', NOW(), 80),
(37, 'Racao 7', 'Ração para filhotes com fórmula especial de crescimento', 59.90, 'racao_7.png', 'cachorro', NOW(), 80),
(38, 'Racao 8', 'Ração hipoalergênica para pets sensíveis', 84.90, 'racao_8.png', 'cachorro', NOW(), 80),
(39, 'Racao 9', 'Ração econômica com alto valor nutricional', 54.90, 'racao_9.png', 'cachorro', NOW(), 80),
(40, 'Racao Gato 1', 'Ração premium para gatos adultos sabor salmão', 74.90, 'racao_gato_1.jpg', 'gato', NOW(), 80),
(41, 'Racao Gato 2', 'Fórmula balanceada com taurina e ômega 3', 69.90, 'racao_gato_2.jpeg', 'gato', NOW(), 80),
(42, 'Racao Gato 3', 'Ração para gatos castrados com controle de peso', 72.90, 'racao_gato_3.jpeg', 'gato', NOW(), 80),
(43, 'Racao Gato 4', 'Sabor frango com arroz, ideal para digestão sensível', 68.90, 'racao_gato_4.jpeg', 'gato', NOW(), 80),
(44, 'Racao Gato 5', 'Ração natural sem corantes e conservantes', 79.90, 'racao_gato_5.jpeg', 'gato', NOW(), 80),
(45, 'Racao Gato 6', 'Ração para filhotes com fórmula de crescimento saudável', 64.90, 'racao_gato_6.jpeg', 'gato', NOW(), 80),
(46, 'Racao Gato 7', 'Ração hipoalergênica para gatos exigentes', 84.90, 'racao_gato_7.jpeg', 'gato', NOW(), 80);

SELECT * FROM produtos WHERE categoria = 'gato';
SELECT * FROM produtos WHERE estoque < 20;
