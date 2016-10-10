CREATE TABLE PROVEEDORES(
	PROV_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	PROV_NOM VARCHAR(50) NOT NULL,
	PRIMARY KEY (PROV_ID)
);

CREATE TABLE PIEZAS(
	PIEZ_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	PIEZ_NOM VARCHAR(100) NOT NULL,
	PRIMARY KEY (PIEZ_ID)
);

CREATE TABLE PRECIOS(
	PREC_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	PROV_ID INT UNSIGNED NOT NULL,
	PIEZ_ID INT UNSIGNED NOT NULL,
	PRECIO DECIMAL(10,2) UNSIGNED DEFAULT NULL,
	PRIMARY KEY (PREC_ID)
);


INSERT INTO PROVEEDORES(
		PROV_NOM
)
VALUES
('Bultaco'),
('Yamaha'),
('Honda'),
('Kawasaki'),
('BMW');

INSERT INTO PROVEEDORES(
	PIEZ_NOM
)
VALUES
('Bultaco'),
('Yamaha'),
('Honda'),
('Kawasaki'),
('BMW');


ALTER TABLE PRECIOS     
ADD INDEX FK_PROV (PROV_ID),    
 ADD CONSTRAINT FK_PROV        
  FOREIGN KEY (PROV_ID)         
  REFERENCES PROVEEDORES (PROV_ID);


ALTER TABLE PRECIOS     
ADD INDEX FK_PIEZ (PIEZ_ID),    
 ADD CONSTRAINT FK_PIEZ        
  FOREIGN KEY (PIEZ_ID)         
  REFERENCES PIEZAS (PIEZ_ID);

ALTER TABLE PRECIOS 
ADD CONSTRAINT CT_UQ_PROV_PIEZ_ID UNIQUE(PROV_ID, PIEZ_ID)

6.1 Obtener los nombres de todas las PIEZAS
SELECT `PIEZ_NOM` FROM `piezas`

6.2 Obtener todos los datos de los PROVEEDORES
SELECT * FROM `proveedores`

6.3 Precio medio de todas las piezas
SELECT AVG(PRECIO)
FROM PRECIOS


6.4 Obtener el precio medio por pieza al que nos suministran las piezas
SELECT PIEZ_ID, AVG(PRECIO)
FROM PRECIOS
GROUP BY PIEZ_ID

6.4 Obtener nombre PROVEEDOR y el precio medio por proveedor al que nos suministran las piezas
SELECT po.PROV_NOM, pr.PROV_ID, AVG(pr.PRECIO)
FROM PRECIOS pr
INNER JOIN PROVEEDORES po
 ON po.PROV_ID = pr.PROV_ID
GROUP BY PROV_ID

6.4 Obtener los nombres de los proveedores que distribuyen la pieza 1
SELECT po.PROV_NOM
FROM PROVEEDORES po
INNER JOIN PRECIOS pr
ON pr.PROV_ID = po.PROV_ID
WHERE pr.PIEZ_ID = 1

SELECT `PROV_NOM` FROM proveedores 
WHERE `PROV_ID` IN 
( SELECT `PROV_ID` FROM precios WHERE PIEZ_ID = 1 )

6.5 Nombres de las piezas suministradas por el proveedor cuyo código es 1
SELECT pz.PIEZ_NOM 
FROM PIEZAS pz 
INNER JOIN PRECIOS pr 
ON pz.PIEZ_ID = pr.PIEZ_ID 
WHERE pr.PROV_ID = 1

6.6 Nombres de las piezas suministradas por el proveedor cuyo nombre es Honda
SELECT pz.PIEZ_NOM 
FROM PIEZAS pz 
INNER JOIN PRECIOS pr 
ON pz.PIEZ_ID = pr.PIEZ_ID 
INNER JOIN PROVEEDORES po
ON pr.PROV_ID = po.PROV_ID
WHERE po.PROV_NOM = 'Honda'

6.7 Obtener un listado de los nombres de las piezas y los proveedores que suministran esas piezas más caras, indicando el nombre de la pieza y el precio al que la suministran
--NO FUNCIONA
SELECT pz.PIEZ_NOM, po.PROV_nom, pz.PIEZ_ID, MAX(pr.PRECIO)
FROM PIEZAS pz
INNER JOIN PRECIOS pr
ON pz.PIEZ_ID = pr.PIEZ_ID
INNER JOIN PROVEEDORES po
ON po.PROV_ID = pr.PROV_ID
GROUP BY pz.PIEZ_ID

---NO FUNCIONA Es la miseria de los GROUP BY, Jordi dixit
SELECT pz.PIEZ_NOM, pr.PROV_ID, pz.PIEZ_ID, MAX(pr.PRECIO)
FROM PIEZAS pz
INNER JOIN PRECIOS pr
ON pz.PIEZ_ID = pr.PIEZ_ID
GROUP BY pz.PIEZ_ID

------ A REVISAR
SELECT pz.PIEZ_NOM, po.PROV_NOM, pr.PRECIO
FROM PIEZAS pz
INNER JOIN (
	PRECIOS pr INNER JOIN PROVEEDORES po
	ON pr.PROV_ID = po.PROV_ID
	)
	ON pz.PIEZ_ID = pr.PIEZ_ID
	WHERE pr.PRECIO IN (
		SELECT MAX(pr.PRECIO) FROM PRECIOS pr2
		GROUP BY pr2.PIEZ_ID
		HAVING pr2.PIEZ_ID = pz.PIEZ_ID
	)
