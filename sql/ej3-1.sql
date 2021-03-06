INSERT INTO t_offices(
	OFFC_ID, OFFC_COUNTRY, OFFC_CITY, OFFC_DESCRIPTION
)
VALUES(
	10, 'España', 'Madrid', 'Oficina Central'
)

INSERT INTO t_offices(
	OFFC_ID, OFFC_COUNTRY, OFFC_CITY
)
VALUES(
	14, 'España', 'Barcelona'
);

INSERT INTO t_offices(
	OFFC_ID, OFFC_COUNTRY, OFFC_CITY, OFFC_DESCRIPTION
)
VALUES(
	20, 'Chile', 'Santiago', 'Oficina principal de Chile'
),
(
	30, 'Argentina', 'Buenos Aires', NULL
)

SELECT OFFC_ID, OFFC_COUNTRY, OFFC_CITY 
FROM t_offices
WHERE OFFC_DESCRIPTION LIKE 'Oficina%'

UPDATE t_offices
SET OFFC_CITY = 'Buenos aires'
WHERE OFFC_CITY = 'Buenos Aires';

CREATE TABLE `T_KNOWLEDGE_LINES` (
  `KNLN_ID` INT(11) NOT NULL,
  `KNLN_NAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`KNLN_ID`)
);

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (10, 'Java');

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (20, '.NET');

INSERT INTO `T_KNOWLEDGE_LINES` (`KNLN_ID`, `KNLN_NAME`)
VALUES (30, 'Mainframe');
