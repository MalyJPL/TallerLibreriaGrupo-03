CREATE DATABASE cuenta_suenos;

ALTER DATABASE cuenta_suenos DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci;

USE cuenta_suenos;

CREATE TABLE estado(
    idEstado     INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    estado       VARCHAR(255)
    );

CREATE TABLE registro(
    idRegistro    INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre        VARCHAR(255),
    apellido      VARCHAR(255),
    correo        VARCHAR(255),
    clave         VARCHAR(255),
    direccion     VARCHAR(255),
    telefono      VARCHAR(255),
    idTipoAdmin   INT NOT NULL,
    idEstado      INT NOT NULL
    );

CREATE TABLE tipoAdmin(
    idTipoAdmin   INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tipo          VARCHAR(255)
    );

CREATE TABLE producto(
    idProducto        INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre            VARCHAR(255),
    autor             VARCHAR(255),
    precio            VARCHAR(255),
    descripcion       LONGTEXT,
    imagen            VARCHAR(255),
    idCategoriaEdad   INT NOT NULL,
    idCategoriaTema   INT NOT NULL,
    idRegistro        INT NOT NULL,
    idEstado          INT NOT NULL
    );

CREATE TABLE categoriaTema(
    idCategoriaTema   INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tema              VARCHAR(255),
    idEstado          INT NOT NULL
    );

CREATE TABLE categoriaEdad(
    idCategoriaEdad  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    edad             VARCHAR(255),
    idEstado         INT NOT NULL
    );

INSERT INTO estado (estado) VALUES ('Activo/Existente'), ('Inactivo/Inexistente');

INSERT INTO registro (nombre, apellido, correo, clave, direccion, telefono, idTipoAdmin, idEstado) VALUES ('Hector','Herrera', 'hector@gmail.com', '123', 'Cra.5 #34-12','3125442367', 1, 1), 
('Juana','Lopez', 'juana@gmail.com', '1234', 'Calle. 65 #84-56','3005487367', 2, 1), ('Oscar','Mendoza', 'oscar@gmail.com', '12345', 'Av.30 #12-96','3045994262', 2, 1) ;

INSERT INTO tipoAdmin (tipo) VALUES ('Super administrador'), ('Administrador');

INSERT INTO producto (nombre, autor, precio, descripcion, imagen, idCategoriaEdad, idCategoriaTema, idRegistro, idEstado) VALUES 
('Los sonidos de la noche','Javier Sobrind/ Emilio urberuaga', '$49.000', 'En los sonidos de la noche de Javier Sobrind, encontrarás
como en una situación todos mostraron cooperar, ningún animal fue indiferente a cada sonido y todos aportaron y colaboraron. La importancia de la solidaridad, del trabajo en 
equipo, de pensar en el bienestar de los demás y no sólo en el propio, es reflejado en este tierno cuento que mostrará a los niños la más hermosa y sencilla esencia de la vida.    
El hábito de la lectura es algo natural, sólo basta con dedicar el tiempo necesario para que este se vuelva parte de la rutina y así ir introduciendo pequeñas sesiones de lectura
diarias. Es importante saber que la lectura genera grandes beneficios en los niños y niñas; enriquece su vocabulario, ayuda a organizar de mejor manera sus mensajes, mejora sus 
habilidades comunicativas, aumenta su concentración y creatividad, eleva su coeficiente intelectual y su capacidad de socializar fortaleciendo sus vínculos y relaciones personales.  
EN ESTA CAJA ENCONTRARÁS
Guía de lectura.
Guía para llevar a cabo la actividad sugerida.
1 lámina con dos monedas con la palabra si.
1 lámina con dos monedas con la palabra no.
2 Pitillos.
1 lista de preguntas para saber ¿Cómo cuidar un niño?
NECESITARÁS ADEMÁS: Tijeras. Pegante.', 'files/los-sonidos-de-la-noche.jpg', 1, 3, 1 ,1), 
('El Principito', 'Antoine De Saint-Exupéry', '$35.000', 'El Principito habita un pequeñísimo asteroide, que comparte con una flor caprichosa y tres volcanes. 
Pero tiene problemas con la flor y empieza a experimentar la soledad. Hasta que decide abandonar el planeta en busca de un amigo. Buscando esa amistad recorre varios planetas, 
habitados sucesivamente por un rey, un vanidoso, un borracho, un hombre de negocios, un farolero, un geógrafo. El concepto de seriedad que tienen estas personas mayores lo deja 
perplejo y confuso.', 'files/el_principito.png', 2, 2, 1 ,1),  
('El Gran Libro de Los Superpoderes', 'Sesanna Isern / Rocio Bonilla', '$88.400', 'El Gran Libro de los Superpoderes es un libro con pequeñas historias que representan cada una de los habilidades que tenemos como un super poderque nos hace únicos', 'files/SuperPoderes.jpg', 2, 4, 1 ,1),
 ('No, no yo no fuí', 'Ivar Da Coll', '$41.000', 'Es la historia de tres amigos que tras tener penosos accidentes deciden inventar historias para ocultar la verdad y no quedar en vergüenza frente a sus grandes amigos.', 'files/NonofuiYo.jpg', 2, 4, 2 ,1),
 ('Con Mis Palabras: Como Resolver Conflictor Con Enfoque Montessori', 'Cristina Tebar Montes', '$60.000', 'Las diferencias de opiniones son parte de las interacciones humanas y son necesarias y positivas, por lo que es importante conocer las herramientas que nos permitirán resolver nuestras diferencias de forma amistosa.', 'files/ConmisPalabras.jpg', 2, 4, 2 ,1),
 ('Julia & Paco: La Escuela Sabana', 'Begoña Oro', '$45.000', 'En la escuela Sabana hay animales de muchos tipos y todos dicen siempre al entrar: «¡Buenos días por la mañana!», bueno, todos no. La jirafa Julia tiene una lengua muy larga y se hace un lío con las palabras. Ella dice: «¿Es día sandía o día banana?». Todos se ríen de ella. Todos menos Paco, que siempre la defiende y trata de animarla.', 'files/JuliayPaco.jpg', 2, 4, 2 ,1),
 ('Tigre el bandido ', 'Kowi', '$37.500', 'Libro para niños con una historia originada en un relato de la tradición oral de los indígenas Kogui y Wiwa de la Sierra Nevada de Santa Marta. Con esta historia, narrada e ilustrada de manera sencilla, los niños aprenden valores a partir de lo que genera la mentira, la trampa y sus consecuencias. También aprenden sobre la Madre Tierra', 'files/tigre.jpg', 3, 1, 3 ,1),
 ('Conejo el mentiroso ', 'Kowi', '$37.500', 'Estás a punto de adentrarte en el mundo mágico de nuestros hermanos de la Sierra Nevada de Santa Marta. Ellos tienen una madre muy especial que es todo: es tierra, mar, ríos, lagunas, cascadas, lluvia y también mujer. Sigue a conejo a ver cómo es su relación con ella.', 'files/conejo.jpg', 3, 1, 3 ,1);

INSERT INTO categoriaTema (tema, idEstado) VALUES ('Fantasia', 1), ('Imaginacion', 1), ('Pensamiento logico', 1), ('Social y valores', 1);

INSERT INTO categoriaEdad (edad, idEstado) VALUES ('0-2 años', 1), ('3-6 años', 1), ('6-8 años', 1), ('8-12 años', 1);

ALTER TABLE registro ADD CONSTRAINT fk_estadoRegistro FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE producto ADD CONSTRAINT fk_estadoProducto FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE categoriaTema ADD CONSTRAINT fk_estadoCategoriaTema FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE categoriaEdad ADD CONSTRAINT fk_estadoCategoriaEdad FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE producto ADD CONSTRAINT fk_adminProducto FOREIGN KEY (idRegistro) REFERENCES registro (idRegistro) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE producto ADD CONSTRAINT fk_EdadLibro FOREIGN KEY (idCategoriaEdad) REFERENCES categoriaEdad (idCategoriaEdad) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE producto ADD CONSTRAINT fk_TemaLibro FOREIGN KEY (idCategoriaTema) REFERENCES categoriaTema (idCategoriaTema) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE registro ADD CONSTRAINT fk_RolAdmin FOREIGN KEY (idTipoAdmin) REFERENCES tipoAdmin (idTipoAdmin) ON DELETE CASCADE ON UPDATE CASCADE;








