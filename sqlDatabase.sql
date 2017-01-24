
CREATE DATABASE sistema;


Create table area_pai (
	id_area_pai Int(11) NOT NULL AUTO_INCREMENT,
	de_nome Varchar(100),
 Primary Key (id_area_pai)) ENGINE = InnoDB
ROW_FORMAT = Compact;

INSERT INTO area_pai (de_nome) VALUES('QUADRA');



Create table area_comum (
	id_cadastro_reserva_area_comum Smallint(6) NOT NULL AUTO_INCREMENT,
	id_area_pai Int(11),
	id_tipo_area Int(11) NOT NULL,
	de_cadastro_reserva_area_comum Varchar(50),
	de_materiais Text,
	nu_valor Decimal(10,2),
	hr_inicio Time,
	hr_fim Time,
	tmp_duracao Int(11),
	st_horario_sn Char(1),
	ignora_qtd_reserva Char(1),
	nu_antecedencia_max Int(10) DEFAULT "30",
	nu_antecedencia_min Int(10) DEFAULT "2",
	qtd_reserva_mes Int(10),
	perm_varias_reserva_dia Char(1),
	qtd_reserva_mes_gratis Int(11),
	qtd_reserva_ano_gratis Int(11),
 Primary Key (id_cadastro_reserva_area_comum)) ENGINE = InnoDB
ROW_FORMAT = Compact;

INSERT INTO area_comum (id_cadastro_reserva_area_comum,
	id_area_pai,
	id_tipo_area,
	de_cadastro_reserva_area_comum,
	de_materiais,
	nu_valor,
	hr_inicio,
	hr_fim,
	tmp_duracao,
	st_horario_sn,
	ignora_qtd_reserva,
	nu_antecedencia_max,
	nu_antecedencia_min,
	qtd_reserva_mes,
	perm_varias_reserva_dia,
	qtd_reserva_mes_gratis,
	qtd_reserva_ano_gratis) VALUES(2, 1, 1, 'QUADRA', '', '0.00', '', '', '15', 'N', 'S', '30', '2', '30', 'N', '0', '1');


Create table tipo_area (
	id_tipo_area Int(11) NOT NULL AUTO_INCREMENT,
	de_tipo_area Varchar(50),
 Primary Key (id_tipo_area)) ENGINE = InnoDB
ROW_FORMAT = Compact;


INSERT INTO tipo_area (de_tipo_area) VALUES('QUADRA');


ALTER TABLE area_comum ADD CONSTRAINT fk_area_comum_area_pai
FOREIGN KEY(id_area_pai) REFERENCES area_pai (id_area_pai);

ALTER TABLE area_comum ADD CONSTRAINT fk_area_comum_tipo_area
FOREIGN KEY(id_tipo_area) REFERENCES tipo_area (id_tipo_area);
