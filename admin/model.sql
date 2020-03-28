CREATE TABLE acompanhamento (
  id_acomp INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigo_prg INTEGER UNSIGNED NOT NULL,
  jan_acomp VARCHAR(45) NULL,
  fev_acomp VARCHAR(45) NULL,
  mar_acomp VARCHAR(45) NULL,
  abr_acomp VARCHAR(45) NULL,
  mai_acomp VARCHAR(45) NULL,
  jun_acomp VARCHAR(45) NULL,
  jul_acomp VARCHAR(45) NULL,
  ago_acomp VARCHAR(45) NULL,
  set_acomp VARCHAR(45) NULL,
  out_acomp VARCHAR(45) NULL,
  nov_acomp VARCHAR(45) NULL,
  dez_acomp VARCHAR(45) NULL,
  PRIMARY KEY(id_acomp)
);

CREATE TABLE mensagem (
  id_msg INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  rg_usua INTEGER UNSIGNED NOT NULL,
  codigo_prg INTEGER UNSIGNED NOT NULL,
  remetente_msg INTEGER UNSIGNED NOT NULL,
  mensagem_msg TEXT NOT NULL,
  PRIMARY KEY(id_msg)
);

CREATE TABLE permissoes (
  id_permissao INTEGER(11) NOT NULL,
  desc_permissao VARCHAR(45) NOT NULL,
  PRIMARY KEY(id_permissao)
);

CREATE TABLE programa (
  codigo_prg INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  rg_usua INTEGER UNSIGNED NOT NULL,
  titulo_prg VARCHAR(45) NOT NULL,
  data_entrega_prg DATE NOT NULL,
  status_prg INTEGER UNSIGNED NOT NULL,
  link_prg VARCHAR(45) NOT NULL,
  PRIMARY KEY(codigo_prg)
);

CREATE TABLE usuario (
  rg_usua INTEGER UNSIGNED NOT NULL,
  id_permissao INTEGER(11) NOT NULL,
  cpf_usua INTEGER UNSIGNED NOT NULL,
  nome_usua VARCHAR(45) NOT NULL,
  email_usua VARCHAR(45) NULL,
  fone_usua VARCHAR(15) NULL,
  PRIMARY KEY(rg_usua)
);


