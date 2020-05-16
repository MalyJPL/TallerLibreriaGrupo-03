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
('Durmiendo con Mamá','Susanna Isern – Natascha Rosenberg', '$105.000', 'Embárcate en el viaje de los sueños junto a nuestra pequeña protagonista. Abre las ventanitas y descubre los secretos que esconden las noches del bosque, la selva, el desierto, el fondo del mar o los polos. Escucha la canción, compuesta e interpretada por la autora Susanna Isern y su hija Yuna, y disfruta de una de las cosas más maravillosas: Dormir con Mamá.  Para aquellos niños y aquellas madres que son felices durmiendo juntos, una, algunas, muchas o todas las noches del mundo.        Descripción
¿CÓMO LEERLO?

Leer libros antes de ir a dormir no solamente fortalece el vínculo afectivo entre padres e hijos, también le permite a los niños desde muy pequeños establecer una buena relación con libros y ver la lectura como una actividad placentera.
El leer con tu hijo antes de ir a dormir le aporta seguridad, por tal razón podrá conciliar mejor el sueño y dormir de forma placentera. Tendrá menos ansiedad y favorece su bienestar emocional.
La lectura previo al descanso nocturno favorece el desarrollo cerebral, los relaja y hace que su memoria aumente.
Con el tiempo y si la lectura se vuelve un hábito, notarás que su vocabulario aumenta mucho más que si hablamos con ellos.
Observa junto con tu hijo el paisaje que muestra cada página y antes que levantar cada ventana imagines juntos que van a encontrar.
DURMIENDO CON MAMÁ nos permite abrir un canal de comunicación con nuestros hijos y expresar emociones, puedes iniciar hablando con tu hijo de cuanto te gusta dormir y compartir estos espacios junto a él.
Cuando los padres interactuamos verbalmente con los niños, lo que incluye leerles cuentos y libros, ellos mejoran su capacidad lógica y además, según recientes estudios, reduce sus niveles de estrés.
 ', 'files/durmiendoConMama.png', 1, 3, 1 ,1), 
('Ojo Con los Números', 'Aleksandra Mizielinska / Daniel Mizielinski', '$50.000', 'Contar puede ser más divertido si al tiempo viajamos a islas, selvas, galerías subterráneas de un castillo, paseamos por el aeropuerto o por las montañas en las que habita el Yeti y por qué no ir al espacio exterior.  A la vez que los niños realizan el conteo deben observar con mucha atención para identificar los objetos o personajes de todo tipo que representan el número ilustrado.  Ojo con Los Números
Este libro está lleno de objetos y personajes curiosos.

¿Cuántas cabezas tiene el dragón que vive en el sótano? ¿Cuántos zapatos están flotando en el espacio? ¿Cuántos aviones hay en el aeropuerto?

Hay muchas cosas para contar, pero ¿cuáles coinciden con el número de la esquina superior? Pon mucha atención.

 

¿CÓMO LEERLO?

La lectura abre la puerta a los niños y despierta su mente a desarrollar la capacidad de imaginar y crear. Leer con los niños a diario otorga beneficios tales como su capacidad de entender y argumentar, aumentando su vocabulario y su espíritu de investigación e indagación, comienzan a formular preguntas, ya sea sobre una nueva palabra, sobre las imágenes o los sucesos de la historia. Esto mejorara su habilidad comunicativa, pues al aumentar su vocabulario los niños adquieren mayor velocidad mental para relacionar conceptos y elaborar sus propios argumentos, así mismo organiza sus mensajes: Presentación, nudo y desenlace.

Un inteligente ejercicio ilustrado en donde la naturaleza y los animales son los protagonistas, que contribuye en el proceso de aprendizaje de los primeros números.
Cuando los niños hacen el ejercicio de observar y contar cada objeto para identificar el número que se representa, también están favoreciendo su atención sostenida.
La discriminación visual en los niños es la habilidad que le permite al niño distinguir o diferenciar el tamaño de los objetos, su forma y color.
Cuando se proponen actividades en los que los niños deben discriminar objetos visualmente, le estamos ayudando a comprender la relación que existe entre los objetos. Por ejemplo, los animales y su habitad natural.
Realizar ejercicios de discriminación visual desde la primera etapa de la infancia de los niños les ayudará más adelante para reconocer con facilidad las figuras geométricas y posteriormente recordar con mayor facilidad el abecedario.', 'files/Ojo-con-los-números-325x475.jpg', 1, 3, 1 ,1),
('Inventoras y sus Inventos','Aitziber Lopez- Luciano Lozano', '$86.000', '¿Te has fijado en los objetos, máquinas y muebles que tienes alrededor? Todos han sido inventados por alguien. Y muchos de ellos fueron ideados por mujeres, chicas que, como tu, querían mejorar el mundo. Es imposible hablar de todos los inventos y de todas las inventoras, pero aquí tienes una bonita y divertida selección.  La lectura abre la puerta a los niños y despierta su mente a desarrollar la capacidad de imaginar y crear. Leer con los niños a diario otorga beneficios tales como su capacidad de entender y argumentar, aumentando su vocabulario y su espíritu de investigación e indagación, comienzan a formular preguntas, ya sea sobre una nueva palabra, sobre las imágenes o los sucesos de la historia. Esto mejorara su habilidad comunicativa, pues al aumentar su vocabulario los niños adquieren mayor velocidad mental para relacionar conceptos y elaborar sus propios argumentos, así mismo organiza sus mensajes: Presentación, nudo y desenlace.  INVENTORAS Y SUS INVENTOS es un libro maravilloso que invita a la investigación, a querer saber más no solamente sobre todas las mujeres brillantes, valientes y con ideas que aportaron algo a nuestra sociedad a lo largo de la historia, sino también de cómo han sido creados todos los objetos y herramientas que a diario utilizamos.
Es un libro inspirador, que va más allá de los miedos y que nos invita a dar un paso extra para lograr cosas extraordinarias.
La investigación juega un papel importante, así que es recomendable que te tomes un espacio con tu hijo para hablar sobre aquello que le inquieta y buscar toda la información al respecto.   Cada inventora y su invento nos muestran una época muy diferente a la actualidad, entonces, puedes hablar con tu hijo de cómo eran los carros antes, cómo los fueron mejorando hasta llegar al carro que utilizamos hoy en día, cómo pasaban las familias su tiempo antes que existiera el televisor…Hay muchos temas interesantes de los cuales puedes hablar.
Es muy posible que durante la lectura a tu hijo le surjan muchas preguntas, por esto te recomendamos leer el libro antes y hacer alguna investigación sobre lo que allí encuentras y otros que pueden investigar juntos, además será una forma maravillosa de compartir tiempo en familia.', 'files/inventoras-325x475.jpg', 3, 3, 1 ,1),
('Despues', 'Lucie Félix', '$67.000', 'Después es un libro maravilloso con el que los niños podrán pasar un divertido tiempo, observando como a partir de unas imágenes base, se pueden crear nuevas figuras. Es un libro que desarrolla y fortalece la imaginación, la exploración, la indagación y la observación.   La lectura abre la puerta a los niños y despierta su mente a desarrollar la capacidad de imaginar y crear. Leer con los niños  a diario otorga beneficios tales como su capacidad de entender y argumentar, aumentando su vocabulario y su espíritu de investigación e indagación, comienzan a formular preguntas, ya sea sobre una nueva palabra, sobre las imágenes o los sucesos de la historia. Esto mejorara su habilidad comunicativa, pues al aumentar su vocabulario los niños adquieren mayor velocidad mental para relacionar conceptos y elaborar sus propios argumentos, así mismo organiza sus mensajes: Presentación, nudo y desenlace.  Cuando un niño dedica al día desde diez minutos de lectura está aumentando su capacidad de concentración, desarrollando su creatividad y aptitudes cognitivas, eleva su coeficiente intelectual, aumenta su capacidad de socialización fortaleciendo su relaciones entre padre e hijo y sus con sus pares.

Es importante que le permitas a tu hijo explorar y observar el libro de manera libre antes de comenzar a leer. Este le permitirá hacer hipótesis y anticiparse a lo que pueda suceder en la historia lo que favorecerá creatividad y estimulara su lenguaje y la construcción de oraciones con sentido.  La observación permite que los niños recojan toda la información no solo del libro sino del entorno que los rodea para así construir nuevos conocimientos de manera reflexiva.
La construcción que hacen los niños de su entorno y cómo desenvolverse en el, se realiza a partir de sus sentidos: Vista, oído, olfato y tacto.
Recuerda que los periodos de observación de los niños varían de acuerdo a su edad. Esta tabla de observación de acuerdo a la edad, te ayudará para no forzar a tu hijo más de lo necesario.  1 año: 3-5 minutos.

2 años: 4-10 minutos.

3 años: 6-15 minutos.

4 años: 8-20 minutos.

5 años: 10-25 minutos.

6 años: 6-30 minutos.     Después es un libro que te ayudará a fortalecer la observación y la atención sostenida de tu hijo, pues a través de la atención los niños pueden centrar su mente en un estímulo de entre todos los que haya a su alrededor. Así mantener la atención focalizada en un punto de interés durante el tiempo que sea necesario.
Para fortalecer la atención es importante ir creando hábitos y rutinas.
Es importante recordar que durante la primera infancia los niños deben desarrollar competencias que fortalezcan su personalidad. Esto les permitirá aprender a tomar decisiones, solucionar problemas y relacionarse con los demás.
El ser humano se caracteriza por adaptar la naturaleza y lo que lo rodea a sus necesidades. Por esta razón fortalecer la creatividad en tu hijo es importante, pues es esta la capacidad de pensar en algo nuevo y mejor; ya que las persona creativas son la que buscan mayor soluciones ante las dificultades.
 ', 'files/libro-Despues.jpg', 1, 3, 1 ,1),
 ('Animezclados | Constanze Kitzing', 'Aleksandra Mizielinska / Daniel Mizielinski Costanze v. Kitzing', '$68.200', ' Este un libro que brinda diferentes opciones de historias, permitiendo a los niños cambiar la cabeza, el cuerpo y los pies de cada animal, lo cual es bastante divertido para ellos, pues crean diferentes animales. Al no tener texto  brinda la posibilidad de estimular la imaginación, el lenguaje y la creatividad.                     
     ¿CÓMO LEERLO?     
 La lectura abre la puerta a los niños y despierta su mente a desarrollar la capacidad de imaginar y  crear. Leer con los niños  a diario otorga beneficios tales como su capacidad de entender y argumentar, aumentando su vocabulario y su espíritu de investigación e indagación, comienzan a formular preguntas, ya sea sobre una nueva palabra, sobre las imágenes o los sucesos de la historia. Esto mejorara su habilidad comunicativa, pues al aumentar su vocabulario los niños adquieren mayor velocidad mental para relacionar conceptos y elaborar sus propios argumentos, así mismo organiza sus mensajes: Presentación, nudo y desenlace.    Cuando un niño dedica al día desde diez minutos de lectura está aumentando su capacidad de concentración, desarrollando su creatividad y aptitudes cognitivas, eleva su coeficiente intelectual, aumenta su capacidad de socialización fortaleciendo su relaciones entre padre e hijo y sus con sus pares.', 'files/Animezclados.jpg', 1, 3, 1 ,1),
 ('El Gran Libro de Los Superpoderes', 'Sesanna Isern / Rocio Bonilla', '$88.400', 'El Gran Libro de los Superpoderes es un libro con pequeñas historias que representan cada una de los habilidades que tenemos como un super poderque nos hace únicos', 'files/SuperPoderes.jpg', 2, 4, 1 ,1),
 ('Mi Voz', 'José Fragoso', '$81.000', 'Nuestra voz es única. Y también lo que decimos. Gracia a ella podemos comunicarnos, así que es debemos prestar atención a nuestro mensaje. Este libro ilustrado nos habla sobre una valiosa herramienta: LA VOZ un elemento que nos hace diferentes al resto del mundo.', 'files/MiVoz.jpg', 2, 4, 2 ,1),
 ('No, no yo no fuí', 'Ivar Da Coll', '$41.000', 'Es la historia de tres amigos que tras tener penosos accidentes deciden inventar historias para ocultar la verdad y no quedar en vergüenza frente a sus grandes amigos.', 'files/NonofuiYo.jpg', 2, 4, 2 ,1),
 ('Con Mis Palabras: Como Resolver Conflictor Con Enfoque Montessori', 'Cristina Tebar Montes', '$60.000', 'Las diferencias de opiniones son parte de las interacciones humanas y son necesarias y positivas, por lo que es importante conocer las herramientas que nos permitirán resolver nuestras diferencias de forma amistosa.', 'files/ConmisPalabras.jpg', 2, 4, 2 ,1),
 ('El Dragón Color Frambuesa', 'Georg Bydlinski', '$30.000', 'Al pequeño dragón le gustaba tanto comer frambuesas que tenía la piel completamente salpicada de lunares rojos. Todos los demás dragones se burlaban de él porque no era verde. ¿Habrá algún sitio donde ser diferente no sea algo de lo que avergonzarse? Un estupendo cuento que muestra la fuerza de la amistad y la superación personal.', 'files/EldragoncolorFrambuesa.jpg', 2, 4, 2 ,1),
 ('Julia & Paco: La Escuela Sabana', 'Begoña Oro', '$45.000', 'En la escuela Sabana hay animales de muchos tipos y todos dicen siempre al entrar: «¡Buenos días por la mañana!», bueno, todos no. La jirafa Julia tiene una lengua muy larga y se hace un lío con las palabras. Ella dice: «¿Es día sandía o día banana?». Todos se ríen de ella. Todos menos Paco, que siempre la defiende y trata de animarla.', 'files/JuliayPaco.jpg', 2, 4, 2 ,1),
 ('La fiesta de Dragonero ', 'Josh Lacey', '$34.000', 'Leer con y para los niños involucra una serie de logros desde ya y para toda su vida. Leer con los niños desde su primera infancia desarrolla el lenguaje no solo expresivo, sino también el comprensivo, estimula la imaginación y la comprensión. Fortalece su autoestima y comprensión de sí mismo y del mundo.', 'files/lafiestadeldragonero.jpg', 3, 2, 3 ,1),
 ('Tigre el bandido ', 'Kowi', '$37.500', 'Libro para niños con una historia originada en un relato de la tradición oral de los indígenas Kogui y Wiwa de la Sierra Nevada de Santa Marta. Con esta historia, narrada e ilustrada de manera sencilla, los niños aprenden valores a partir de lo que genera la mentira, la trampa y sus consecuencias. También aprenden sobre la Madre Tierra', 'files/tigre-325x400.jpg', 3, 1, 3 ,1),
 ('Conejo el mentiroso ', 'Kowi', '$37.500', 'Estás a punto de adentrarte en el mundo mágico de nuestros hermanos de la Sierra Nevada de Santa Marta. Ellos tienen una madre muy especial que es todo: es tierra, mar, ríos, lagunas, cascadas, lluvia y también mujer. Sigue a conejo a ver cómo es su relación con ella.', 'files/conejo-325x400.jpg', 3, 1, 3 ,1),
 ('Oliva ', 'Ian Falconer', '$43.200', 'Olivia es la historia de una cerdita muy curiosa e incansable, le gusta saber todo y para esto hace bastantes preguntas, indaga todo el tiempo, investiga gracias a que es muy detallista y observadora. Este libro contiene herramientas sencillas para que tus hijos se relajen, para que practiquen solos o con tu ayuda, la atención plena o mindfulness. A través de él llegaran a la calma y la concentración, y así potenciarán y mejorarán todo aquellos que ya tiene en su interior: Confianza, autoestima, concentración, intuición y creatividad.', 'files/Olivia-325x400.jpg', 3, 1, 3 ,1),
 ('Descubro los árboles y aprendo a conocerlos ', 'Claire Lecoeuvre – Laurianne Chevalier', '$62.00', '"La historia de una semilla que se convierte en árbol…

Sigue paso a paso el crecimiento de la semilla hasta que se convierte en un frondoso árbol, que da frutos, que tiene diferentes tipos de hojas y que se encuentran en diferentes lugares del mundo.

Aprende a conocer la naturaleza y así poder vivirla y cuidarla."', 'files/descubro-los-arboles-y-aprendo-a-reconocerlos-325x458.jpg', 3, 1, 3 ,1);



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








