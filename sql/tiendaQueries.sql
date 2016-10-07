LA TIENDA DE INFORMATICA
1.1 Obtener los nombres de los productos de la tienda 
SELECT ART_NOM FROM ARTICULOS
1.2 Obtener los nombres y los precios de los productos de la tienda
SELECT ART_NOM, ART_PRECIO FROM ARTICULOS
1.3 Obtener el nombre de productos cuyo precio sea mayor de 200
SELECT ART_NOM, ART_PRECIO FROM ARTICULOS 
WHERE ART_PRECIO > 200
1.4 Obtener todos los datos de los productos cuyo precio esté entre 60 y 120
SELECT * FROM ARTICULOS
WHERE ART_PRECIO >= 60 AND ART_PRECIO <= 120

SELECT * 
FROM ARTICULOS 
WHERE ART_PRECIO 
BETWEEN 60 AND 120

1.5 Obtener el nombre del producto y su precio en pesetas (1euro=166.386ptas)
SELECT ART_NOM, ROUND(ART_PRECIO * 166.386, 2) AS PRECIO_PTAS
 FROM ARTICULOS

1.6 Seleccionar el precio de todos los productos
SELECT AVG(ART_PRECIO) AS PRECIO_MEDIO
FROM ARTICULOS

1.7 Obtener el precio medio de los articulos cuyo codigo de fabricante sea 2
SELECT AVG(ART_PRECIO) AS PRECIO_MEDIO
FROM ARTICULOS
WHERE FAB_ID = 2;

1.8 Obtener el numero de artículos cuyo precio sea mayor o igual a 180
SELECT COUNT(ART_ID) 
FROM `ARTICULOS` 
WHERE ART_PRECIO >= 180

1.9 Ordenar la tabla de articulos, con precio mayor de 180, descendientemente por precio y luego ascendentemente por nombre
SELECT * 
FROM `ARTICULOS` 
WHERE ART_PRECIO > 180
ORDER BY ART_PRECIO DESC, ART_NOM

1.10 Obtener un listado completo de artículos, incluyendo por cada artículo los datos del artículo y de su fabricante.
SELECT * 
FROM articulos a 
INNER JOIN fabricantes f 
ON a.FAB_ID = f.FAB_ID

1.11 Obtener un listado de articulos, incluyendo el nombre del artículo, su precio, y el nombre de su fabricante
SELECT ART_NOM, ART_PRECIO, f.FAB_NOM 
FROM articulos a 
INNER JOIN fabricantes f 
ON a.FAB_ID = f.FAB_ID

1.12 Obtener el precio medio de los productos de cada fabricante, mostrando sólo los códigos del fabricante
SELECT AVG(a.ART_PRECIO), a.FAB_ID
FROM articulos a
GROUP BY a.FAB_ID
-- No es necesario invocar a fabricantes
(SELECT AVG(a.ART_PRECIO), f.FAB_ID
FROM fabricantes f
INNER JOIN articulos a
ON a.FAB_ID = f.FAB_ID
GROUP BY f.FAB_ID)

1.13 Obtener el precio medio de los productos de cada fabricante, mostrando el nombre del fabricante
SELECT AVG(a.ART_PRECIO), f.FAB_NOM
FROM fabricantes f
INNER JOIN articulos a
ON a.FAB_ID = f.FAB_ID
GROUP BY f.FAB_ID

1.14 Obtener los nombre de los fabricantes que ofrezcan productos cuyo precio medio sea mayor o igual a 150

SELECT AVG(a.ART_PRECIO) PRECIO_MEDIO, f.FAB_NOM
FROM fabricantes f
INNER JOIN articulos a
ON a.FAB_ID = f.FAB_ID
GROUP BY f.FAB_ID
HAVING PRECIO_MEDIO >= 150

1.15 Obtener el nombre y el precio del artículo más barato
SELECT ART_NOM, MIN(ART_PRECIO) 
FROM `articulos`

1.16 Obtener una lista con el nombre y precio de los artículos más caros de cada proveedor (incluyendo el nombre del proveedor)
SELECT f.FAB_NOM, a.ART_NOM, MAX(a.ART_PRECIO) PRECIO_MAXIMO
FROM fabricantes f
INNER JOIN ARTICULOS a
ON a.FAB_ID = f.FAB_ID
GROUP BY f.FAB_ID

1.17 Añadir un nuevo producto: altavoces de 70€ del fabricante 2

INSERT INTO `articulos`(`ART_NOM`, `ART_PRECIO`, `FAB_ID`) VALUES ('Altavoces', 70, 2)

1.18 Cambiar el nombre del producto 8 a 'Impresora laser':
UPDATE `articulos` SET ART_NOM = 'Impresora laser'
WHERE ART_ID = 8;

1.19 Aplicar un descuento del 10% a todos los productos
UPDATE `articulos` SET ART_PRECIO = ART_PRECIO * 0.9;

1.20 Aplicar un descuento del 10% a todos los productos cuyo precio sea mayor o igual a 120€ 
UPDATE `articulos` 
SET ART_PRECIO = ART_PRECIO * 0.9
WHERE ART_PRECIO >= 120;