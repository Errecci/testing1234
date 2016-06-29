CREATE TABLE homestead.ambitos (
	id int(10) NOT NULL auto_increment,
	nome varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	descrizione text(65535) NOT NULL,
	created_at timestamp,
	updated_at timestamp,
	PRIMARY KEY (id)
) ENGINE=InnoDB
GO
CREATE TABLE homestead.clients (
	id int(10) NOT NULL auto_increment,
	ragione_sociale varchar(255) NOT NULL,
	descrizione varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	logo varchar(255) NOT NULL,
	created_at timestamp,
	updated_at timestamp,
	PRIMARY KEY (id)
) ENGINE=InnoDB
GO
CREATE TABLE homestead.migrations (
	migration varchar(255) NOT NULL,
	batch int(10) NOT NULL
) ENGINE=InnoDB
GO
CREATE TABLE homestead.tipologies (
	id int(10) NOT NULL auto_increment,
	nome varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	descrizione text(65535) NOT NULL,
	created_at timestamp,
	updated_at timestamp,
	PRIMARY KEY (id)
) ENGINE=InnoDB
GO
CREATE TABLE homestead.users (
	id int(10) NOT NULL auto_increment,
	first_name varchar(255) NOT NULL,
	last_name varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	password varchar(60) NOT NULL,
	remember_token varchar(100),
	created_at timestamp,
	updated_at timestamp,
	PRIMARY KEY (id)
) ENGINE=InnoDB
GO
CREATE TABLE homestead.works (
	id int(10) NOT NULL auto_increment,
	titolo varchar(255) NOT NULL,
	descrizione varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	imglavoro varchar(255) NOT NULL,
	is_published tinyint(3) NOT NULL,
	published_at datetime NOT NULL,
	meta_keys varchar(255) NOT NULL,
	meta_description varchar(255) NOT NULL,
	user_id int(10) NOT NULL,
	client_id int(10) NOT NULL,
	ambito_id int(10) NOT NULL,
	tipologie_id int(10) NOT NULL,
	created_at timestamp,
	updated_at timestamp,
	PRIMARY KEY (id)
) ENGINE=InnoDB
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (1, 'Alimenti', 'alimenti', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (2, 'Bevande', 'bevande', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (3, 'Moda e Abbigliamento', 'moda-abbigliamento', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (4, 'Centri Commerciali', 'centri-commerciali', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (5, 'Servizi Finanziari', 'servizi-finanziari', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (6, 'Grande Distribuzione (GDO)', 'gdo', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (7, 'Educazione e Formazione', 'educazione-formazione', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (8, 'Salute', 'salute', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (9, 'Informazione (Media)', 'informazione', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (10, 'Ristorazione', 'ristorazione', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (11, 'Ospitalità e Banchettistica', 'ospitalita-banchettistica', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (12, 'Auto e Moto', 'auto-moto', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (13, 'Arte e Cultura', 'arte-cultura', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (14, 'Beni di Lusso', 'beni-di-lusso', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (15, 'Complementi d''Arredo', 'complementi-arredo', '', null, null)
GO
INSERT INTO homestead.ambitos(id, nome, slug, descrizione, created_at, updated_at) VALUES (16, 'Servizi e Consulenza', 'servizi-consulenza', '', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (3, 'Accademia Divento', 'Descrizione', 'accademia-divento', 'accademia-divento-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (4, 'Alessi', 'Descrizione', 'alessi', 'alessi-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (5, 'Alwaysicily', 'Descrizione', 'alwaysicily', 'alwaysicily-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (6, 'Amia', 'Descrizione', 'amia', 'amia-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (7, 'Analdi', 'Descrizione', 'analdi', 'analdi-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (8, 'Arcipelago', 'Descrizione', 'arcipelago', 'arcipelago-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (9, 'Area14', 'Descrizione', 'area14', 'area14-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (10, 'Bellaville', 'Descrizione', 'bellaville', 'bellaville-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (11, 'Bpsa', 'Descrizione', 'bpsa', 'bpsa-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (12, 'Bucalo', 'Descrizione', 'bucalo', 'bucalo-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (13, 'Bucatino', 'Descrizione', 'bucatino', 'bucatino-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (14, 'Calatrasi', 'Descrizione', 'calatrasi', 'calatrasi-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (15, 'Candela', 'Descrizione', 'candela', 'candela-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (16, 'Cantieri ai Leoni', 'Descrizione', 'cantieri-ai-leoni', 'cantieriaileoni-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (17, 'Cantine Settesoli', 'Descrizione', 'cantine-settesoli', 'cantinesettesoli-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (18, 'Care', 'Descrizione', 'care', 'care-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (19, 'Casa', 'Descrizione', 'casa', 'casa-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (20, 'Casa Mercato', 'Descrizione', 'casa-mercato', 'casamercato-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (21, 'Cascino', 'Descrizione', 'cascino', 'cascino-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (22, 'Cei', 'Descrizione', 'cei', 'cei-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (23, 'Claudio Di Mari', 'Descrizione', 'claudio-di-mari', 'claudiodimari-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (24, 'Claudio Miceli', 'Descrizione', 'claudio-miceli', 'claudiomiceli-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (25, 'Coalma', 'Descrizione', 'coalma', 'coalma-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (26, 'Concadoro', 'Descrizione', 'concadoro', 'concadoro-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (27, 'Corsama', 'Descrizione', 'corsama', 'corsama-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (28, 'Corvo', 'Descrizione', 'corvo', 'corvo-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (29, 'Cucci', 'Descrizione', 'cucci', 'cucci-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (30, 'Dafne', 'Descrizione', 'dafne', 'dafne-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (31, 'Dell Oglio', 'Descrizione', 'dell-oglio', 'dell-oglio-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (32, 'Dell Oglio Outlet', 'Descrizione', 'dell-oglio-outlet', 'dell-oglio-outlet-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (33, 'Do', 'Descrizione', 'do', 'do-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (34, 'Dottor', 'Descrizione', 'dottor', 'dottor-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (35, 'Elauto', 'Descrizione', 'elauto', 'elauto-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (36, 'Fiorentino', 'Descrizione', 'fiorentino', 'fiorentino-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (37, 'Fioriblu', 'Descrizione', 'fioriblu', 'fioriblu-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (38, 'Firmato e Conveniente', 'Descrizione', 'firmato-e-conveniente', 'firmatoeconveniente-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (39, 'Firriato', 'Descrizione', 'firriato', 'firriato-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (40, 'Fondo del Mezzogiorno', 'Descrizione', 'fondo-del-mezogiorno', 'fondodelmezogiorno-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (41, 'Giornale di Sicilia', 'Descrizione', 'giornale-di-sicilia', 'giornale-di-sicilia-clienti-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (42, 'Gonzata', 'Descrizione', 'gonzata', 'gonzata-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (43, 'Greco Mobili', 'Descrizione', 'greco-mobili', 'grecomobili-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (44, 'Greensolution', 'Descrizione', 'greensolution', 'greensolution-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (45, 'Icar', 'Descrizione', 'icar', 'icar-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (46, 'Icecube', 'Descrizione', 'icecube', 'icecube-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (47, 'Incarichi Pubblici', 'Descrizione', 'incarichi-pubblici', 'incarichi-pubblici-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (48, 'Kbet', 'Descrizione', 'kbet', 'kbet-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (49, 'Kore', 'Descrizione', 'kore', 'kore-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (50, 'Kursaal', 'Descrizione', 'kursaal', 'kursaal-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (51, 'Lamalfa14', 'Descrizione', 'lamalfa14', 'lamalfa14-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (52, 'Locastro', 'Descrizione', 'locastro', 'locastro-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (53, 'Macaluso', 'Descrizione', 'macaluso', 'macaluso-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (54, 'Mandrarossa', 'Descrizione', 'mandrarossa', 'mandrarossa-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (55, 'Maremonti', 'Descrizione', 'maremonti', 'maremonti-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (56, 'Mediterraneandomains', 'Descrizione', 'mediterraneandomains', 'mediterraneandomains-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (57, 'Mg', 'Descrizione', 'mg', 'mg-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (58, 'Mirrione Legnami', 'Descrizione', 'mirrione-legnami', 'mirrione-legnami-clienti-drt.jpg', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (59, 'Myes My English School', 'Descrizione', 'myes-my-english-school', 'myes-my-english-school-clienti-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (60, 'Nutrimare', 'Descrizione', 'nutrimare', 'nutrimare-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (61, 'Officine Baronali', 'Descrizione', 'officine-baronali', 'officinebaronali-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (62, 'Optissimo', 'Descrizione', 'optissimo', 'optissimo-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (63, 'Palab', 'Descrizione', 'palab', 'palab-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (64, 'Pickup', 'Descrizione', 'pickup', 'pickup-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (65, 'Poggio Normanno', 'Descrizione', 'poggio-normanno', 'poggionormanno-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (66, 'Polostore', 'Descrizione', 'polostore', 'polostore-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (67, 'Posdata', 'Descrizione', 'posdata', 'posdata-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (68, 'Progettocontract', 'Descrizione', 'progettocontract', 'progettocontract-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (69, 'Progettoelleci', 'Descrizione', 'progettoelleci', 'progettoelleci-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (70, 'Puntofaro', 'Descrizione', 'puntofaro', 'puntofaro-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (71, 'Quintocanto', 'Descrizione', 'quinto-canto', 'quintocanto-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (72, 'Riolo', 'Descrizione', 'riolo', 'riolo-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (73, 'Rpanel', 'Descrizione', 'rpanel', 'rpanel-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (74, 'Scillufo', 'Descrizione', 'scillufo', 'scillufo-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (75, 'Sering', 'Descrizione', 'sering', 'sering-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (76, 'Sin', 'Descrizione', 'sin', 'sin-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (77, 'Sis', 'Descrizione', 'sis', 'sis-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (78, 'Stanze Baronali', 'Descrizione', 'stanze-baronali', 'stanzebaronali-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (79, 'System Gifrab', 'Descrizione', 'systemgifrab', 'systemgifrab-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (80, 'Teatro Massimo Palermo', 'Descrizione', 'teatro-massimo', 'teatromassimocliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (81, 'Theb', 'Descrizione', 'theb', 'theb-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (82, 'The Bagh', 'Descrizione', 'the-bagh', 'thebagh-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (83, 'Thomas More', 'Descrizione', 'Thomas-more', 'Thomasmore-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (84, 'Tomasello', 'Descrizione', 'tomasello', 'tomasello-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (85, 'Ventorosso', 'Descrizione', 'ventorosso', 'ventorosso-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (86, 'Vivaigitto', 'Descrizione', 'vivai-gitto', 'vivaigitto-cliente-drt.png', null, null)
GO
INSERT INTO homestead.clients(id, ragione_sociale, descrizione, slug, logo, created_at, updated_at) VALUES (87, 'Insanitas', 'Descrizione', 'insanitas', 'insanitas-cliente-drt.png', null, null)
GO
INSERT INTO homestead.migrations(migration, batch) VALUES ('2016_04_26_124719_Setup', 1)
GO
INSERT INTO homestead.tipologies(id, nome, slug, descrizione, created_at, updated_at) VALUES (1, 'Digital', 'digital', '', null, null)
GO
INSERT INTO homestead.tipologies(id, nome, slug, descrizione, created_at, updated_at) VALUES (2, 'Brand Identity', 'brand-identity', '', null, null)
GO
INSERT INTO homestead.tipologies(id, nome, slug, descrizione, created_at, updated_at) VALUES (3, 'Advertising', 'advertising', '', null, null)
GO
INSERT INTO homestead.tipologies(id, nome, slug, descrizione, created_at, updated_at) VALUES (4, 'Shop Experience', 'shop-experience', '', null, null)
GO
INSERT INTO homestead.tipologies(id, nome, slug, descrizione, created_at, updated_at) VALUES (5, 'Packaging', 'packaging', '', null, null)
GO
INSERT INTO homestead.users(id, first_name, last_name, slug, email, password, remember_token, created_at, updated_at) VALUES (1, 'Antonio', 'Liuni', 'antonioliuni', 'web@drtadv.it', 'nessuna', '', null, null)
GO
INSERT INTO homestead.works(id, titolo, descrizione, slug, imglavoro, is_published, published_at, meta_keys, meta_description, user_id, client_id, ambito_id, tipologie_id, created_at, updated_at) VALUES (4, 'Brand Identity Insanitas', 'Brand Identity per Insanitas.it, portale di news e servizi sulla Sanità Siciliana.', 'brand-identity-insanitas', 'anteprima-brand-identity-insanitas-drtadv.jpg', 1, '2016-04-29 10:07:38', '', '', 1, 87, 8, 2, null, null)
GO
INSERT INTO homestead.works(id, titolo, descrizione, slug, imglavoro, is_published, published_at, meta_keys, meta_description, user_id, client_id, ambito_id, tipologie_id, created_at, updated_at) VALUES (5, 'Advertising Cascino', '', 'advertising-cascino-2015', 'anteprima-advertising-cascino-2015-drtadv.jpg', 1, '2016-04-29 10:07:38', '', '', 1, 21, 15, 3, null, null)
GO
