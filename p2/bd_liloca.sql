CREATE DATABASE bd_liloca;

use bd_liloca;

DELIMITER $$

-- Produto

CREATE DEFINER = root@localhost PROCEDURE consulta_produto (id_Produto INT) select * from produto $$

CREATE DEFINER = root@localhost PROCEDURE delete_produto (IN prodid INT)
BEGIN
set @prodid = prodid;
DELETE FROM produto WHERE idProduto = prodid;
END $$

CREATE DEFINER = root@localhost PROCEDURE editar_produto (IN txtidcliente INT,IN txtbolo varchar(30),IN txtsalgado varchar(30),IN txtrefri varchar(30),IN txtquantidadeB INT(11),IN txtquantidadeS INT(11),IN txtquantidadeR INT(11),IN txtvalor INT(11) 	,IN txtvalorS INT(11) 	,IN txtvalorR INT(11)) BEGIN
SET @txtidcliente = txtidcliente;
SET @txtbolo = txtbolo;
SET @txtsalgado = txtsalgado;
SET @txtrefri = txtrefri;
SET @txtquantidadeB = txtquantidadeB;
SET @txtquantidadeS = txtquantidadeS;
SET @txtquantidadeR = txtquantidadeR;
SET @txtvalor = txtvalor;
SET @txtvalorS = txtvalorS;
SET @txtvalorR = txtvalorR;

UPDATE produto SET bolo_chocolate = txtbolo, salgado_coxinha = txtsalgado, refrigeranteC = txtrefri, quantidade_boloC = txtquantidadeB, quantidade_salgadoC = txtquantidadeS, quantidade_refriC = txtquantidadeR, valor_unit = txtvalor, valor_unitS = txtvalorS, valor_unitR = txtvalorR WHERE Cliente_idCliente = txtidcliente;
END $$

CREATE DEFINER = root@localhost PROCEDURE inserir_produto (IN txtidcliente INT,IN txtbolo varchar(30),IN txtsalgado varchar(30),IN txtrefri varchar(30),IN txtquantidadeB INT(11),IN txtquantidadeS INT(11),IN txtquantidadeR INT(11),IN txtvalor INT(11),IN txtvalorS INT(11),IN txtvalorR INT(11),IN txtvalortotalB INT(11),IN txtvalortotalS INT(11),IN txtvalortotalR INT(11),IN txtvalortotal INT(11)) 		BEGIN 
SET @txtidcliente = txtidcliente;
SET @txtbolo = txtbolo;
SET @txtsalgado = txtsalgado;
SET @txtrefri = txtrefri;
SET @txtquantidadeB = txtquantidadeB;
SET @txtquantidadeS = txtquantidadeS;
SET @txtquantidadeR = txtquantidadeR;
SET @txtvalor = txtvalor;
SET @txtvalorS = txtvalorS;
SET @txtvalorR = txtvalorR;
SET @txtvalortotalB = txtvalortotalB;
SET @txtvalortotalS = txtvalortotalS;
SET @txtvalortotalR = txtvalortotalR;
SET @txtvalortotal = txtvalortotal;
PREPARE STMT FROM "INSERT INTO produto (Cliente_idCliente, bolo_chocolate, salgado_coxinha, refrigeranteC, quantidade_boloC, quantidade_refriC, quantidade_salgadoC, valor_unit, valor_unitS, valor_unitR,valor_totalB,valor_totalS,valor_totalR,valor_total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
EXECUTE STMT USING @txtidcliente,@txtbolo,@txtsalgado,@txtrefri,@txtquantidadeB,@txtquantidadeS,@txtquantidadeR,@txtvalor,@txtvalorS,@txtvalorR,@txtvalortotalB,@txtvalortotalS,@txtvalortotalR,@txtvalortotal;
END$$
-- Final Produto

-- Cliente

CREATE DEFINER = root@localhost PROCEDURE consulta_cliente (id_cliente INT) select * from cliente $$

CREATE DEFINER = root@localhost PROCEDURE delete_cliente (IN userid INT) BEGIN
set @userid = userid;
DELETE FROM cliente WHERE idcliente = userid;
END $$

CREATE DEFINER = root@localhost PROCEDURE editar_cliente (IN txtid INT, IN txtnome VARCHAR(30), IN txttelefone VARCHAR(30), IN txtendereco VARCHAR(30), IN txtcpf INT(11)) BEGIN
SET @txtid = txtid;
SET @txtnome = txtnome;
SET @txttelefone = txttelefone;
SET @txtendereco = txtendereco;
SET @txtcpf = txtcpf;

UPDATE cliente SET nome = txtnome, telefone = txttelefone, endereco = txtendereco, cpf = txtcpf WHERE idcliente = txtid;
END $$

CREATE DEFINER = root@localhost PROCEDURE inserir_cliente ( IN txtnome VARCHAR(30), IN txttelefone VARCHAR(30), IN txtendereco VARCHAR(30), IN txtcpf INT(11)) BEGIN
SET @txtnome = txtnome;
SET @txttelefone = txttelefone;
SET @txtendereco = txtendereco;
SET @txtcpf = txtcpf;

PREPARE STMT FROM "INSERT INTO cliente (nome, telefone, endereco, cpf) VALUES (?,?,?,?)";
EXECUTE STMT USING @txtnome, @txttelefone, @txtendereco, @txtcpf;
END $$

-- Final cliente

-- Festa

CREATE DEFINER = root@localhost PROCEDURE consulta_festa (id_festa INT) select * from festa $$

CREATE DEFINER = root@localhost PROCEDURE delete_festa (festaid INT) BEGIN
set @festaid = festaid;
DELETE FROM FESTA where Cliente_idCliente = festaid;
END $$

CREATE DEFINER = root@localhost PROCEDURE editar_festa (IN txtidcliente INT, IN txtaniversariante VARCHAR(30), IN txtidade INT(11), IN txtendereco VARCHAR(30), IN txttema VARCHAR(30), IN txtcores VARCHAR(30)) BEGIN
SET @txtidcliente = txtidcliente;
SET @txtaniversariante = txtaniversariante;
SET @txtidade = txtidade;
SET @txtendereco = txtendereco;
SET @txttema = txttema;
SET @txtcores = txtcores;

UPDATE festa SET aniversariante = txtaniversariante, idade = txtidade, endereco = txtendereco, tema = txttema, cores = txtcores WHERE Cliente_idCliente = txtidcliente;
END $$

CREATE DEFINER = root@localhost PROCEDURE inserir_festa (IN txtidcliente INT, IN txtaniversariante VARCHAR(30), IN txtidade INT(11), IN txtendereco VARCHAR(30), IN txttema VARCHAR(30), IN txtcores VARCHAR(30)) BEGIN
SET @txtidcliente = txtidcliente;
SET @txtaniversariante = txtaniversariante;
SET @txtidade = txtidade;
SET @txtendereco = txtendereco;
SET @txttema = txttema;
SET @txtcores = txtcores;

PREPARE STMT FROM "INSERT INTO festa (Cliente_idCliente, aniversariante, idade, endereco, tema, cores) VALUES (?,?,?,?,?,?)";
EXECUTE STMT USING @txtidcliente,@txtaniversariante,@txtidade,@txtendereco,@txttema,@txtcores;
END $$
-- Final Festa

-- Pedido

CREATE DEFINER = root@localhost PROCEDURE consulta_pedido (id_pedido INT) SELECT * FROM pedido $$

CREATE DEFINER = root@localhost PROCEDURE delete_pedido (pedidoid INT) BEGIN
set @pedidoid = pedidoid;
DELETE FROM pedido where Cliente_idCliente = pedidoid;
END $$

CREATE DEFINER = root@localhost PROCEDURE editar_pedido (IN txtidcliente INT, IN txtdata_pedido DATE, IN txtdata_festa DATE, IN txtprazo DATE, IN txtdata_entrega DATE, IN txttipo_entrega VARCHAR(30), IN txtfrete DOUBLE, IN txtsinal DOUBLE, in txtrestante DOUBle)  BEGIN
SET @txtidcliente = txtidcliente;
SET @txtdata_pedido = txtdata_pedido;
SET @txtdata_festa = txtdata_festa;
SET @txtprazo = txtprazo;
SET @txtdata_entrega = txtdata_entrega;
SET @txttipo_entrega = txttipo_entrega;
SET @txtfrete = txtfrete;
SET @txtsinal = txtsinal;
SET @txtrestante = txtrestante;

UPDATE pedido SET data_pedido = txtdata_pedido, data_festa = txtdata_festa, prazo = txtprazo, data_entrega = txtdata_entrega, tipo_entrega = txttipo_entrega, frete = txtfrete, sinal = txtsinal, restante = txtrestante WHERE Cliente_idCliente = txtidcliente;
END $$

CREATE DEFINER = root@localhost PROCEDURE inserir_pedido (IN txtidcliente INT, IN txtdata_pedido DATE, IN txtdata_festa DATE, IN txtprazo DATE, IN txtdata_entrega DATE, IN txttipo_entrega VARCHAR(30), IN txtfrete DOUBLE, IN txtsinal DOUBLE, in txtrestante DOUBle)  BEGIN
SET @txtidcliente = txtidcliente;
SET @txtdata_pedido = txtdata_pedido;
SET @txtdata_festa = txtdata_festa;
SET @txtprazo = txtprazo;
SET @txtdata_entrega = txtdata_entrega;
SET @txttipo_entrega = txttipo_entrega;
SET @txtfrete = txtfrete;
SET @txtsinal = txtsinal;
SET @txtrestante = txtrestante;

PREPARE STMT FROM "INSERT INTO pedido (Cliente_idCliente, data_pedido, data_festa, prazo, data_entrega, tipo_entrega, frete, sinal, restante) VALUES (?,?,?,?,?,?,?,?,?)";
EXECUTE STMT USING @txtidcliente, @txtdata_pedido, @txtdata_festa, @txtprazo, @txtdata_entrega, @txttipo_entrega, @txtfrete, @txtsinal, @txtrestante;
END $$
-- Final Pedido

DELIMITER ;



CREATE TABLE Cliente (
  idCliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(200) NULL,
  telefone VARCHAR(20) NULL,
  endereco VARCHAR(200) NULL,
  cpf INT(12) NULL,
  PRIMARY KEY(idCliente)
);

CREATE TABLE Festa (
  idFesta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Pedido_idPedido INTEGER UNSIGNED NOT NULL,
  Cliente_idCliente INTEGER UNSIGNED NOT NULL,
  aniversariante VARCHAR(200) NULL,
  idade INTEGER UNSIGNED NULL,
  endereco VARCHAR(200) NULL,
  tema VARCHAR(200) NULL,
  cores VARCHAR(200) NULL,
  PRIMARY KEY(idFesta),
  INDEX Festa_FKIndex1(Cliente_idCliente),
  INDEX Festa_FKIndex2(Pedido_idPedido)
);

CREATE TABLE Pedido (
  idPedido INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Cliente_idCliente INTEGER UNSIGNED NOT NULL,
  data_pedido DATE NULL,
  data_festa DATE NULL,
  prazo DATE NULL,
  data_entrega DATE NULL,
  tipo_entrega VARCHAR(200) NULL,
  frete DOUBLE NULL,
  sinal DOUBLE NULL,
  restante DOUBLE NULL,
  PRIMARY KEY(idPedido),
  INDEX Produto_FKIndex1(Cliente_idCliente)
);

CREATE TABLE Produto (
  idProduto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Cliente_idCliente INTEGER UNSIGNED NOT NULL,
  bolo_chocolate VARCHAR(200) NULL,
  salgado_coxinha VARCHAR(200) NULL,
  refrigeranteC VARCHAR(200) NULL,
  quantidade_boloC INTEGER UNSIGNED NULL,
  quantidade_salgadoC INTEGER UNSIGNED NULL,
  quantidade_refriC INTEGER UNSIGNED NULL,
  valor_unit DOUBLE NULL,
  valor_unitS DOUBLE NULL,
  valor_unitR DOUBLE NULL,
  valor_totalB DOUBLE NULL,
  valor_totalS DOUBLE NULL,
  valor_totalR DOUBLE NULL,
  valor_total DOUBLE NULL,
  PRIMARY KEY(idProduto),
  INDEX Produto_FKIndex1(Cliente_idCliente)
);


INSERT INTO `cliente` (`idCliente`, `nome`, `telefone`, `endereco`, `cpf`) VALUES (NULL, 'aaa', '11111', 'AAAA', '111');

